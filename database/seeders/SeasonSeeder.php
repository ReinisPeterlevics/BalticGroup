<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SeasonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $seasons = [
            ['name' => 'Winter'],
            ['name' => 'Spring'],
            ['name' => 'Summer'],
            ['name' => 'Fall'],
        ];

        foreach ($seasons as $season) {
            \App\Models\Season::create([
                "name"=>$season["name"],
            ]);
        }
    }
}
