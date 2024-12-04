<?php

namespace Database\Seeders;

use App\Models\Book;
use App\Models\Categorie;
use App\Models\Description;
use App\Models\Publisher;
use App\Models\Reader;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(3)->create();

        /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */


        $this->call([
            // AuthorsSeeder::class,
            // PublishersSeeder::class,
            // CategoriesSeeder::class,
            UsersSeeder::class,
            // ReadersSeeder::class,
            // ExternalSeeder::class,
            // Añade más seeders aquí
        ]);
    }
}
