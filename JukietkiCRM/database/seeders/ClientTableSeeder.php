<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            \App\Models\Client::create([
                'name_surname' => $faker->name,
                'phone_number' => $faker -> phoneNumber,
                'email' => $faker -> email,
                'address' => $faker -> address,
                'comment' => $faker -> sentence,
            ]);
        }

    }
}
