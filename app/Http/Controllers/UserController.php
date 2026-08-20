<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Services\UserService;

class UserController extends Controller
{
    public function __construct(
        private UserService $userService
    ) {}

    public function create()
    {
        return view('usuarios.create');
    }

    public function store(StoreUserRequest $request)
    {
        $this->userService->cadastrar($request->validated());

        return redirect()->route('usuarios.create')->with('sucesso', 'Usuário salvo com sucesso!');
    }

    
}