<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'user';
    protected $fillable = ['name', 'age', 'batch', 'email', 'password', 'image', 'address', 'contact'];
}
