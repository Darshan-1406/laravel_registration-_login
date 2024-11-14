<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoginRegister extends Model
{
    protected $table = 'registerlogin';
    protected $fillable = [
        'id',
        'name',
        'email',
        'phone',
        'password',
        'gender',
        'birthday',
        'city',
        'hobby',
        'adress',
        'profile',
    ];
}
