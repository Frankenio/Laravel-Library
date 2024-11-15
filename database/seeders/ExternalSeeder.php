<?php

namespace Database\Seeders;

use App\Models\ExternalReader;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExternalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $external = [
            [
                'code' => fake()->numerify('1#######'),
                'first_name' => fake()->firstName(),
                'last_name' => fake()->lastName(),
                'birth_date' => fake()->date(),
                'nationality' => fake()->country(),
                'email' => fake()->unique()->safeEmail(),
                'phone' => fake()->numerify('7#######'),
                'address' => fake()->address(),
            ],
            [
                'code' => fake()->numerify('1#######'),
                'first_name' => fake()->firstName(),
                'last_name' => fake()->lastName(),
                'birth_date' => fake()->date(),
                'nationality' => fake()->country(),
                'email' => fake()->unique()->safeEmail(),
                'phone' => fake()->numerify('7#######'),
                'address' => fake()->address(),
            ],
            [
                'code' => fake()->numerify('1#######'),
                'first_name' => fake()->firstName(),
                'last_name' => fake()->lastName(),
                'birth_date' => fake()->date(),
                'nationality' => fake()->country(),
                'email' => fake()->unique()->safeEmail(),
                'phone' => fake()->numerify('7#######'),
                'address' => fake()->address(),
            ],
            [
                'code' => fake()->numerify('1#######'),
                'first_name' => fake()->firstName(),
                'last_name' => fake()->lastName(),
                'birth_date' => fake()->date(),
                'nationality' => fake()->country(),
                'email' => fake()->unique()->safeEmail(),
                'phone' => fake()->numerify('7#######'),
                'address' => fake()->address(),
            ],
            [
                'code' => fake()->numerify('1#######'),
                'first_name' => fake()->firstName(),
                'last_name' => fake()->lastName(),
                'birth_date' => fake()->date(),
                'nationality' => fake()->country(),
                'email' => fake()->unique()->safeEmail(),
                'phone' => fake()->numerify('7#######'),
                'address' => fake()->address(),
            ],
        ];
        foreach ($external as $reader) {
            ExternalReader::create($reader);
        }
    }
}
