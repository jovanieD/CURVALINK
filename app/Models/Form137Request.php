<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form137Request extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'user_id',
        'principalname',
        'name',
        'grade',
        'schoolyear',
        'adviser',
        'requestorname',
        'request',
        'remarks',
    ];
    

    public function form137Requests(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
