<?php

namespace Database\Seeders;

use App\Enums\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'DNI' => fake()->unique()->numerify('########'),
                'name' => 'Benjamín',
                'email' => 'benjamin@gmail.com',
                'phone' => fake()->numerify('7#######'),
                'address' => 'Zona Vinto, Calle Eduardo Avaroa, Nro 1, Piso 2',
                'password' => bcrypt(123),
                'role' => Role::Administrador,
            ],
            [
                'DNI' => fake()->unique()->numerify('########'),
                'name' => 'Juan',
                'email' => 'juan@gmail.com',
                'phone' => fake()->numerify('7#######'),
                'address' => fake()->address(),
                'password' => bcrypt(123),
                'role' => Role::Bibliotecario,
            ],
            // Añade más usuarios aquí
        ];
        foreach ($users as $user) {
            User::create($user);
        }
    }
}
