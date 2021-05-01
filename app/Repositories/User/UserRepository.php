<?php

namespace App\Repositories\User;

use App\Models\User;

class UserRepository
{
    public function getAll()
    {
        return User::all();
    }

    public function findById(int $id)
    {
        return User::query()->where('id', $id)->get()->first();
    }
}
