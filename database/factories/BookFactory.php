<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text,
            // 'author' => $this->faker->name,
            // 'publisher' => $this->faker->name,
            // 'year' => $this->faker->year,
            // 'pages' => $this->faker->numberBetween(100, 1000),
        ];
    }
}
