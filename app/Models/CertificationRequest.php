<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CertificationRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'firstname',
        'lastname',
        'address',
        'municipality',
        'province',
        'postal',
        'phonenumber',
        'email',
        'document',
        'purpose',
        'status',
        'document',
    ];

    public function requestor()
{
    return $this->belongsTo(User::class, 'requestor_id');
}

}
