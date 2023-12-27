<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Management\UserManagement;

class UserController extends Controller
{
    protected $user;

    public function __construct(UserManagement $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        return Inertia::render('User/Index', [
            'users' => $this->user->getAll()
        ]);
    }

    public function show(string $id)
    {
        return Inertia::render('User/Show', [
            'user' => $this->user->getById($id)
        ]);
    }

    public function create(Request $request)
    {
        $this->user->create($request);
        return to_route('users.index');
    }

    public function signUp()
    {
        return Inertia::render('User/SignUp', [
            'signUpImg' => asset('images/signup.png'),
            'tokopediaLogo' => asset('images/tokopedia.png')
        ]);
    }

    public function edit($id)
    {
        return Inertia::render('User/Update', [
            'user' => $this->user->getById($id)
        ]);
    }

    public function update($id, Request $request)
    {
        $this->user->update($id, $request);
        return to_route('users.show', [
            'id' => $id
        ]);
    }

    public function delete($id)
    {
        $this->user->delete($id);
        return to_route('users.index');
    }
}
