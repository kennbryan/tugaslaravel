<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Controllers\BuahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return redirect('/');
});


Route::post('/login', function (Request $request) {
    $request->validate([
        'username' => 'required',
        'password' => 'required',
    ]);

    $user = User::where('username', $request->username)
                ->where('password', $request->password)
                ->first();

    if ($user) {
        session(['logged_in_user' => $user->username]);
        return redirect('/buah');
    }

    return back()->with('error', 'Username atau password salah.');
});


Route::get('/logout', function () {
    session()->forget('logged_in_user');
    return redirect('/');
})->name('logout');


Route::get('/buah', [BuahController::class, 'index']);
