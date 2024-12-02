<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class EvamediaUserController extends Controller
{
    public function user()
    {
        $users = User::all();
        return response()->json($users);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'avatar' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        if ($request->avatar) {
            $fileName = $this->generateRandomString();
            $extension = $request->avatar->extension();
            $avatar = $fileName . '.' . $extension;

            Storage::disk('public')->putFileAs('evamediaAPI/avatar', $request->avatar, $avatar);
        }

        $avatar = $request->avatar ? $avatar : null;

        $user = new User();
        $user->name = $request->name;
        $user->avatar = $avatar;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        return response()->json(['message' => 'User Created Successfully'], 201);
    }

    public function generateRandomString($length = 10)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[random_int(0, $charactersLength - 1)];
        }

        return $randomString;
    }
}
