<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function show(string $name)
    {
        return Inertia::render('User/Show', [
            'user' => $name
        ]);
    }
}
