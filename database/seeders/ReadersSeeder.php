<?php

namespace Database\Seeders;

use App\Enums\Role;
use App\Models\Reader;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReadersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $readers = [
            [
                'code' => fake()->numerify('1#######'),
                'first_name' => fake()->firstName(),
                'last_name' => fake()->lastName(),
                'birth_date' => fake()->date(),
                'nationality' => fake()->country(),
                'email' => fake()->unique()->safeEmail(),
                'phone' => fake()->numerify('7#######'),
                'address' => fake()->address(),
                'role' => Role::Estudiante,
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
                'role' => Role::Estudiante,
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
                'role' => Role::Estudiante,
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
                'role' => Role::Estudiante,
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
                'role' => Role::Docente,
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
                'role' => Role::Docente,
            ],
            // Añade más lectores aquí
        ];
        foreach ($readers as $reader) {
            Reader::create($reader);
        }
    }
}
