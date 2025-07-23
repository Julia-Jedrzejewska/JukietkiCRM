<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class OrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++){
            \App\Models\Order::create([
                'client_id' => $faker->numberBetween(1,40),
                'order_status' => $faker->randomElement(['nowe','w realizacji', 'zrealizowane', 'anulowane']),
                'price' => $faker->randomFloat(2, 10, 100),
                'order_items' => $faker->words(3, true),
                'end_date' => $faker->date(),
                'comment' => $faker->words(3, true),
            ]);
        }


    }
}
