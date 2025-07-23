<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class ExpenseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++){
            \App\Models\Expense::create([
                'price' => $faker->randomFloat(2, 10, 100),
                'category' => $faker->randomElement(['promocja_firmy', 'materiały', 'inne']),
                'link' => $faker->url,
                'date' => $faker->date(),
                'comment' => $faker->words(3,true),
            ]);
        }

    }
}
