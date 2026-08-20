<?php

namespace App\Repositories;

use App\Models\User;

class EloquentUserRepository implements UserRepositoryInterface
{
    public function create(array $dados): User
    {
        return User::create($dados);
    }
}