<?php

namespace App\Http\Controllers\User;

use App\Models\Usuario;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('usuarios.cadastrar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request['senha'] = bcrypt($request['senha']);

        $query = $request->only(['nome_usuario', 'cpf', 'email', 'sexo', 'cep', 'bairro', 'cidade', 'estado', 'numero', 'eh_admin', 'senha', 'data_nascimento']);

        Usuario::create($query);

        return redirect()->route('index')->with('success', 'Usuário criado com sucesso. Entre com seus novos dados no sistema');
    }

    /**
     * Display the specified resource.
     */
    public function show(Usuario $usuario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Usuario $usuario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Usuario $usuario)
    {
        //
    }
}
