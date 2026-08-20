<?php

namespace App\Services;

use App\Models\User;
use App\Repositories\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class UserService
{
    public function __construct(
        private UserRepositoryInterface $userRepository
    ) {}

    public function cadastrar(array $dados): User
    {
        $dados['password'] = Hash::make($dados['password']);

        return $this->userRepository->create($dados);
    }
}