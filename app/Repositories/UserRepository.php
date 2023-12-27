<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function getAll()
    {
        return User::all();
    }

    public function getById($id)
    {
        return User::find($id);
    }

    public function create($request)
    {
        return User::create($request);
    }

    public function update($id, $request)
    {
        $user = $this->getById($id);
        return $user->update($request);
    }

    public function delete($id)
    {
        return $this->getById($id)->delete();
    }
}
