<?php

namespace App\Http\Controllers;

use App\Models\Usuarios;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function create(){
        return view('usuarios.create');
        
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome'=> 'required|string|max:255',
            'cpf'=> 'required|string|max:255',
            'telefone'=> 'required|string|max:255',
            'email'=> 'required|string|max:255',
            'senha'=> 'required|string|max:255',
        ]);

        Usuarios::create([
            'nome' =>$request->nome,
            'cpf'=>$request->cpf,
            'telefone'=>$request->telefone,
            'email'=>$request->email,
            'senha'=>$request->senha,
        ]);

         return redirect()->route('usuarios.create')->with('success', 'Usuário cadastrado com sucesso!');
    }
}
