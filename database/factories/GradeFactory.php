<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class GradeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'test_name' => $this->faker->word(),
            'lowest_passing_grade'=> 5.5,
            'best_grade' => $this->faker->numberBetween(0, 10),
        ];
    }
}
