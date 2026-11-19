<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;

class ReporteController extends Controller
{
    // Mostrar formulario de registro
    public function index()
    {
        if (!session()->has('usuario_id')) {
            return redirect()->route('login')
                ->with('error', 'Debes iniciar sesión.');
        }

        $reportes = DB::table('reportes')
            ->where('correo', session('email'))
            ->orderByDesc('created_at')
            ->get();

        return view('home.reportes', compact('reportes'));
    }

    // Guardar reporte
    public function store(Request $request)
    {
        if (!session()->has('usuario_id')) {
            return redirect()->route('login');
        }

        $request->validate([
            'numero_computadora' => 'required|string|max:50',
            'causa' => 'required|string|max:2000',
        ]);

        $correo = session('email');

        $id = DB::table('reportes')->insertGetId([
            'numero_computadora' => $request->numero_computadora,
            'causa' => $request->causa,
            'correo' => $correo,
            'estado' => 'Pendiente',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        // Enlace temporal para confirmar la validación
        $url = URL::temporarySignedRoute(
            'reportes.confirmar',
            now()->addDays(2),
            ['reporte' => $id]
        );

        try {
            Mail::html(
                view('emails.reporte-validacion', [
                    'url' => $url,
                    'reporte' => DB::table('reportes')->where('id', $id)->first()
                ])->render(),
                function ($message) use ($correo) {
                    $message->to($correo)
                        ->subject('Validación de reporte de falla');
                }
            );
        } catch (\Throwable $e) {
            report($e);

            return redirect()->route('reportes.index')
                ->with('warning', 'El reporte se guardó, pero no se pudo enviar el correo. Revisa la configuración de correo.');
        }

        return redirect()->route('reportes.index')
            ->with('success', 'Reporte registrado. Se envió un correo para validar el reporte.');
    }

    // Mostrar confirmación desde el enlace del correo
    public function confirmar(Request $request, $reporte)
    {
        $datos = DB::table('reportes')
            ->where('id', $reporte)
            ->first();

        if (!$datos) {
            abort(404);
        }

        return view('home.confirmar-reporte', [
            'reporte' => $datos
        ]);
    }

    // Cambiar el estado a Validado
    public function validar(Request $request, $reporte)
    {
        $datos = DB::table('reportes')
            ->where('id', $reporte)
            ->first();

        if (!$datos) {
            abort(404);
        }

        if ($datos->estado === 'Validado') {
            return view('home.reporte-validado', [
                'reporte' => $datos
            ]);
        }

        DB::table('reportes')
            ->where('id', $reporte)
            ->update([
                'estado' => 'Validado',
                'validado_at' => now(),
                'updated_at' => now()
            ]);

        $reporteActualizado = DB::table('reportes')
            ->where('id', $reporte)
            ->first();

        return view('home.reporte-validado', [
            'reporte' => $reporteActualizado
        ]);
    }
}
