<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $guard = "admin";

    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'email',
        'password',
        'profile_image',
        'subject_handle',
        'grade_level',
        'address',
        'municipality',
        'province',
        'rank',
        'phonenumber',
        'gender',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function announcements()
    {
        return $this->hasMany(Announcement::class);
    }

    public function events()
    {
        return $this->hasMany(Event::class);
    }
}