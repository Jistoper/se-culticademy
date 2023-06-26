<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CourseProgression extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_id',
        'session_id',
        'user_id',
        'status',
    ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function session()
    {
        return $this->belongsTo(Video::class);
    }
}
