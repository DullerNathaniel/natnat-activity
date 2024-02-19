<?php

namespace Database\Factories;

use Carbon\Carbon;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'student_first_name' => fake()->firstname(),
            'student_last_name' => fake()->lastname(),
            'student_email' => "test@gmail.com",
            'student_address' => fake()->streetAddress(),
        ];
    }
}
