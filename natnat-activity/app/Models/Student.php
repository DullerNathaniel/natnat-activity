<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{   
    protected $table = 'students';
    protected $fillable = ['student_first_name', 'student_last_name', 'student_email', 'student_address'];

}
