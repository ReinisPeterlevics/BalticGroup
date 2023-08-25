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
        $startDate = $this->faker->dateTimeBetween('-1 week', '+1 week');
        $endDate = $this->faker->dateTimeBetween($startDate, $startDate->format('Y-m-d').'+2 week');
        $departureDate = $this->faker->dateTimeBetween($startDate->format('Y-m-d').'-3 days', $startDate);
        $returnDate = $this->faker->dateTimeBetween($endDate, $endDate->format('Y-m-d').'+3 days');
        $duration = $returnDate->diff($departureDate)->format('%a');
        $season = $this->faker->numberBetween(1, 4);
        $image = '/images/locations/'.$season.'-'.$this->faker->numberBetween(1, 4).'.jpg';
        $smallImage = '/images/locations/'.$season.'-'.$this->faker->numberBetween(1, 4).'-small.jpg';
        return [
            'name' => $this->faker->text(25),
            'description' => $this->faker->text(400),
            'country_id' => $this->faker->numberBetween(1, 20),
            'season_id' => $season,
            'hotel' => $this->faker->text(30),
            'image' => $image,
            'small_image' => $smallImage,
            'start_date' => $startDate,
            'end_date' => $endDate,
            'duration' => $duration,
            'price' => $this->faker->numberBetween(200, 1500),
            'spots_left' => $this->faker->numberBetween(1, 50),
            'departure_date' => $departureDate,
            'return_date' => $returnDate,
        ];
    }
}
