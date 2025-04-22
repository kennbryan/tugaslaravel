<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Buah;

class BuahController extends Controller
{
    public function index()
    {
        $buah = Buah::all();
        return view('buah.index', compact('buah'));
    }
}
