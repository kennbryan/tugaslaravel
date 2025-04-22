<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buah;

class BuahController extends Controller
{
    public function index()
    {
        if (!session()->has('logged_in_user')) {
            return redirect('/');
        }
        $buah = Buah::all();
        return view('buah.index', compact('buah'));
    }
}
