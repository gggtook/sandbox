<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/users');
Route::resource('users', App\Http\Controllers\UserController::class, ['only' => ['index']]);
