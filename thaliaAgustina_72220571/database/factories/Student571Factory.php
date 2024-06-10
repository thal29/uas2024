<?php

namespace Database\Factories;

use App\Models\Student571;
use Illuminate\Database\Eloquent\Factories\Factory;

class Student571Factory extends Factory
{
    protected $model = Student571::class;

    public function definition()
    {
        return [
            'student_number_571' => $this->faker->numerify('###'),
            'student_name_571' => $this->faker->name,
            'gender_571' => $this->faker->randomElement(['Male', 'Female']),
            'gpa_571' => $this->faker->randomFloat(2, 2.00, 4.00),
        ];
    }
}
