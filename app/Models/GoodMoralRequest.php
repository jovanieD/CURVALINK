<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GoodMoralRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'idnumber',
        'firstname',
        'middlename',
        'lastname',
        'purpose',
        'requestorfirstname',
        'requestorlastname',
        'requestorsaddress',
        'requestorscity',
        'requestorsprovince',
        'remarks',
        'status',
        'releasedate',
    ];

    public function goodmoralRequests(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function schedules()
    {
        return $this->morphMany(Schedule::class, 'schedulable');
    }
}
