<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LocationFactory extends Factory
{
    protected $model = \App\Models\Location::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->text(30),
            'description' => $this->faker->text(200),
            'country_id' => $this->faker->numberBetween(1, 20),
            'season_id' => $this->faker->numberBetween(1, 4),
            'hotel' => $this->faker->text(40),
            'image' => $this->faker->imageUrl('images/', 640, 400, null, false),
            'start_date' => $this->faker->date('Y-m-d'),
            'end_date' => $this->faker->date('Y-m-d'),
            'duration' => $this->faker->numberBetween(1, 10),
            'price' => $this->faker->numberBetween(200, 1500),
            'spots_left' => $this->faker->numberBetween(1, 50),
            'departure_date' => $this->faker->date('Y-m-d'),
            'return_date' => $this->faker->date('Y-m-d'),
        ];
    }
}
