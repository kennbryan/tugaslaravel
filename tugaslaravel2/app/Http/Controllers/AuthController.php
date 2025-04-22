<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = User::where('username', $request->username)
                    ->where('password', $request->password) 
                    ->first();

        if ($user) {
            Auth::login($user);
            return redirect('/buah');
        }

        return back()->with('error', 'Username atau password salah.');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
