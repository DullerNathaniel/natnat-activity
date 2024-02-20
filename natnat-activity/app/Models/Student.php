<?php

namespace App\Models;

use App\Models\Course;
use App\Models\Enrollment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{   
    use HasFactory;
    protected $fillable = ['student_first_name', 'student_last_name', 'student_email', 'student_address'];

    public function enrollments() {
        return $this->hasMany(Enrollment::class);
    }

    public function courses()
    {
        return $this->hasManyThrough(Course::class, Enrollment::class);
    }

}
