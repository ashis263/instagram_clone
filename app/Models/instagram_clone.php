<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\photos;
class instagram_clone extends Model
{
    use HasFactory;

    protected $table='users';
    protected $fillable = [
        'emailOrPhone',
        'fullname',
        'username',
        'rememberToken',
        'dp',
        'password',
    ];
    public function photos(){
        return $this->hasMany(photos::class, 'users_id', 'id');
    }
}
