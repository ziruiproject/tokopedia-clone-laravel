<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::post('/signup', [UserController::class, 'signup']);
Route::get('/users', [UserController::class, 'index']);
Route::get('/users/{id}', [UserController::class, 'show']);
Route::put('/users/edit/{id}', [UserController::class, 'update']);
Route::get('/users/edit/{id}', [UserController::class, 'edit']);
Route::delete('/users/delete/{id}', [UserController::class, 'delete']);
