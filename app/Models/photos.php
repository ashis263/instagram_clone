<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\instagram_clone;

class photos extends Model
{
    use HasFactory;
    protected $table='photos';
    protected $fillable=[
        'filename',
        'users_id'
    ];
    public function users(){
        return $this->belongsTo(instagram_clone::class, 'users_id');
    }
}
