<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Exibe o formulário
    public function create()
    {
        return view('usuarios.create');
    }

    // Recebe os dados e salva no banco
    public function store(Request $request)
    {
        // Validação básica de segurança
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:3',
        ]);

        // Criação usando Eloquent ORM
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Criptografa a senha
        ]);

        return redirect()->back()->with('sucesso', 'Usuário cadastrado com sucesso!');
    }
}