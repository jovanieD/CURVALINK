<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'teacher_id',
        'title',
        'description',
        'image_url',
        'start_datetime', 
        'end_datetime', 
        'location',
    ];

    // Relationships
    public function teacher()
    {
        return $this->belongsTo(Teacher::class);
    }
}
