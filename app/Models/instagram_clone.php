<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class instagram_clone extends Model
{
    use HasFactory;

    protected $table='users';
    protected $fillable = [
        'emailOrPhone',
        'fullname',
        'username',
        'rememberToken',
        'password',
    ];
}
