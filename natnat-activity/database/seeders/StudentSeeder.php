<?php

namespace Database\Seeders;

use App\Models\Enrollment;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Student::factory(1) 
            -> has(Enrollment::factory() -> count(2))
            -> has(Course::factory() -> count(2))
            -> create();
    }
}
