<?php

namespace App\Models;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Enrollment extends Model
{
    use HasFactory;
    protected $fillable = ['enrollment_date'];

    public function student() {
        return $this->belongsTo(Student::class);

    }

    public function course() {
        return $this->belongsTo(Course::class, 'course_id', 'id');

    }

}