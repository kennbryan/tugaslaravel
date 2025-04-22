<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuahController;
Route::get('/buah', [BuahController::class, 'index']);
