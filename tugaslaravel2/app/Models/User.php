<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    // Field yang bisa diisi (mass assignable)
    protected $fillable = [
        'username',
        'password',
    ];

    // Tidak perlu sembunyikan apapun (tidak ada token, tidak hash password)
    protected $hidden = [];

    // Tidak ada cast hash password (hapus fungsi casts)
}
