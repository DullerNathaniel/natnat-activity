<?php

namespace App\Models;

use App\Models\Enrollment;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $fillable = ['course_name', 'course_description'];

    protected $table = 'courses';
    public function enrollments() {
        return $this->hasMany(Enrollment::class, 'course_id', 'id');
    }

}
