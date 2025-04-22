<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buah extends Model
{
    protected $table = 'buah';
    protected $fillable = ['nama', 'warna', 'stok'];
}
