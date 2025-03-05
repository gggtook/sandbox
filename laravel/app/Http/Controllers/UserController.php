<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate(10);

        return view('user/index', [
            'users' => $users,
        ]);
    }

    public function show($id)
    {
        $user = User::find($id);

        return view('user/show', [
            'user' => $user,
        ]);
    }
}
