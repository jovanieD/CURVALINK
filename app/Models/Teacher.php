<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;

class Teacher extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;


    protected $guard = "teacher";

    protected $fillable = [
        'name',
        'email',
        'password',
        'profile_image',
        'address',
        'municipality',
        'province',
        'phonenumber',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}