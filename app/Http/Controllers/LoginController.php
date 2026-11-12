<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        return view('home.inicio');
    }

    public function login(Request $request)
    {
        $request->merge([
            'email' => strtolower(trim($request->email))
        ]);

        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $usuario = DB::table('formatos')
            ->where('email', $request->email)
            ->first();

        if (!$usuario || !Hash::check($request->password, $usuario->password)) {
            return back()
                ->with('error', 'Correo o contraseña incorrectos')
                ->withInput($request->only('email'));
        }

        $request->session()->regenerate();

        $request->session()->put([
            'usuario_id' => $usuario->id,
            'nombre' => $usuario->nombre,
            'matricula' => $usuario->matricula,
            'telefono' => $usuario->telefono,
            'email' => $usuario->email,
            'login_success' => true
        ]);

        return redirect()->route('session');
    }

    public function logout(Request $request)
    {
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('inicio.web');
    }
}