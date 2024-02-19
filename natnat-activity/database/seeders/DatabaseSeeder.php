<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this -> call(class: StudentSeeder::class);
        $this -> call(class: CourseSeeder::class);
        $this -> call(class: EnrollmentSeeder::class);
    }
}
