<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    use HasFactory;

    protected $fillable = [
        'teacher_id', 
        'title',
        'imageurl',
        'description',
    ];

    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
