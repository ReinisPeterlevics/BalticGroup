<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PaymentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payment_types = [
            ['name' => 'Card'],
            ['name' => 'PayPal'],
            ['name' => 'Google Pay'],
            ['name' => 'Apple Pay']
        ];

        foreach ($payment_types as $payment_type) {
            \App\Models\PaymentType::create([
                'name' => $payment_type['name']
            ]);
        }
    }
}
