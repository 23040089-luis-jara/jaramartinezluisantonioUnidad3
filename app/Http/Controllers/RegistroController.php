<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegistroController extends Controller
{
    public function index()
    {
        return view('home.registro');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'matricula' => 'required',
            'telefono' => 'required',
            'email' => 'required|email',
            'password1' => 'required|min:8'
        ]);

        DB::table('formatos')->insert([
            'nombre' => $request->nombre,
            'matricula' => $request->matricula,
            'telefono' => $request->telefono,
            'email' => $request->email,
            'password' => Hash::make($request->password1)
        ]);

        return redirect()
            ->route('registro')
            ->with('success', 'Registro exitoso');
    }
}

