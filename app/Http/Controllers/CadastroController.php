<?php

namespace App\Http\Controllers;

use App\Models\Cadastro;
use Illuminate\Http\Request;

class CadastroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/login/cadastro');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/login/cadastro');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cadastro = new Cadastro;

        $cadastro->name = $request->name;
        $cadastro->cep = $request->cep;
        $cadastro->street = $request->street;
        $cadastro->number = $request->number;
        $cadastro->city = $request->city;
        $cadastro->state = $request->state;
        $cadastro->cnpj = $request->cnpj;
        $cadastro->email = $request->email;
        $cadastro->password = $request->password;

        $cadastro->save();
        return redirect('login')->with('success', 'Registro inserido com sucxesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
