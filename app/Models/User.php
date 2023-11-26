<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;



class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'firstname',
        'middlename',
        'lastname',
        'email',
        'password',
        'profile_image',
        'address',
        'municipality',
        'province',
        'phonenumber',
        'gender',
        'gradelevel',
        'idnumber',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function goodMoralRequests()
    {
        return $this->hasMany(GoodMoralRequest::class, 'user_id');
    }

    public function certificationRequests()
    {
        return $this->hasMany(CertificationRequest::class, 'user_id');
    }

    public function form137Requests()
    {
        return $this->hasMany(Form137Request::class, 'user_id');
    }

    public function schedules()
    {
        return $this->morphMany(Schedule::class, 'schedulable');
    }
}
