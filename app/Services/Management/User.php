<?php

namespace App\Services\Management\User;

use App\Repositories\User\UserRepository;

class UserManagement
{
    protected $user;

    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    public function getAll()
    {
        return $this->user->getAll();
    }

    public function getById($id)
    {
        return $this->user->getById($id);
    }

    public function create($request)
    {
        return $this->user->create($request);
    }

    public function update($id, $request)
    {
        return $this->user->update($id, $request);
    }

    public function delete($id)
    {
        return $this->user->delete($id);
    }
}
