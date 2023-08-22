<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ActivitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $activities = [
            ['name' => 'Card'],
            ['name' => 'Online Banking'],
            ['name' => 'PayPal'],
            ['name' => 'Google Pay'],
            ['name' => 'Apple Pay']
        ];

        foreach ($activities as $activity) {
            \App\Models\Activity::create([
                'name' => $activity['name']
            ]);
        }
    }
}
