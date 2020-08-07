<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function show(User $user)
    {
        // $user = User::where('name', $name)->first();

        return view('users.show', [
            'user' => $user,
        ]);
    }
}
