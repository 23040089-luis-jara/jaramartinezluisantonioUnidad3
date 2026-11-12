<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class SessionController extends Controller
{
    public function index()
    {
        if (!session()->has('usuario_id')) {
            return redirect()->route('login')
                ->with('error', 'Debes iniciar sesión primero.');
        }

        $formatos = DB::table('formatos')->get();

        return view('home.session', compact('formatos'));
    }
}