<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CourseCertification extends Model
{
    protected $fillable = ['course_id', 'user_id', 'certificate_path'];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
