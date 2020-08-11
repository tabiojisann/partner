<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Storage;
use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function show(User $user)
    {
        return view('users.show', [
            'user' => $user,
        ]);
    }

     public function edit(User $user)
     {
        return view('users.edit', [
            'user' => $user,
        ]);
     }

     public function update(UserRequest $request, User $user)
     {
        $user->fill($request->all());  

        $image = $request->file('image');
        $fileName = ($image)->getClientOriginalName();
        $path = Storage::disk('s3')->putFileAs('users', $image, $fileName);
        $user->image = Storage::disk('s3')->url($path);

         $user->save();

         return view('users.show', ['user' => $user]);
     }
}
