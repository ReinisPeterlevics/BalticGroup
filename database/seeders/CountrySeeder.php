<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Country;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            ['name' => 'Latvia'],
            ['name' => 'Lithuania'],
            ['name' => 'Estonia'],
            ['name' => 'Bulgaria'],
            ['name' => 'Slovakia'],
            ['name' => 'Slovenia'],
            ['name' => 'Croatia'],
            ['name' => 'Serbia'],
            ['name' => 'USA'],
            ['name' => 'Iceland'],
            ['name' => 'UK'],
            ['name' => 'Canada'],
            ['name' => 'Germany'],
            ['name' => 'Ireland'],
            ['name' => 'Italy'],
            ['name' => 'India'],
            ['name' => 'Singapore'],
            ['name' => 'Australia'],
            ['name' => 'Japan'],
            ['name' => 'Brazil']
        ];

        foreach ($countries as $country) {
            \App\Models\Country::create([
                "name"=>$country["name"],
            ]);
        }
    }
}
