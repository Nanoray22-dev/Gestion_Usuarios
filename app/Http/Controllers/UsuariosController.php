<?php

namespace App\Http\Controllers;

use App\Models\usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuario = usuarios::all();
        return view('layouts.table',['datos'=>$usuario]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('layouts.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required',
            'surname' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);

        $usuario = new usuarios();
        $usuario->name = $request->name;
        $usuario->surname = $request->surname;
        $usuario->email = $request->email;
        $usuario->password = $request->password;
        $usuario->save();

        return redirect()->route('index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuarios = usuarios::findOrFail($id);
        return view('show', compact('usuarios'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $usuarios = usuarios::findOrFail($id);
        return view('edit', compact('usuarios'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nombre'=> 'required',
            'apellidos'=> 'required',
            'email'=> 'required|email|unique:usuarios,email,'.$id,
            'password'=> 'nullable|min:6'
        ]);

        $usuarios = usuarios::findOrFail($id);
        $usuarios-> nombre = $request->nombre;
        $usuarios-> apellido = $request->apellido;
        $usuarios-> emaail = $request->email;
        if($request-> password){
            $usuarios-> password  = bcrypt($request->password);
        }
        $usuarios->save();

        return redirect()->route('index')->with('success', "usuarios actualizado");


    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuarios = usuarios::findOrFail($id);
        $usuarios->delete();
        return redirect()->route('index')->with('success', 'usuarios eliminado');
    }
}
