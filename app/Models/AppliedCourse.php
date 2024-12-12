<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppliedCourse extends Model
{
    //
    protected $fillable = [
        'user_id',
        'course_id',
        'status'
    ];
}
