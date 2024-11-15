<?php

namespace Database\Seeders;

use App\Models\Author;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = [
            ['first_name' => 'Robert', 'last_name' => 'Martin', 'birth_date' => Carbon::createFromFormat('Y-m-d','1952-12-05'), 'nationality' => 'USA'],
            ['first_name' => 'Martin', 'last_name' => 'Fowler', 'birth_date' => Carbon::createFromFormat('Y-m-d','1963-12-18'), 'nationality' => 'UK'],
            ['first_name' => 'Kent', 'last_name' => 'Beck', 'birth_date' => Carbon::createFromFormat('Y-m-d','1961-03-31'), 'nationality' => 'USA'],
            ['first_name' => 'Donald', 'last_name' => 'Knuth', 'birth_date' => Carbon::createFromFormat('Y-m-d','1938-01-10'), 'nationality' => 'USA'],
            ['first_name' => 'Eric', 'last_name' => 'Evans', 'birth_date' => Carbon::createFromFormat('Y-m-d','1960-09-25'), 'nationality' => 'USA'],
            // Añade más autores aquí
        ];

        foreach ($authors as $author) {
            Author::create($author);
        }
    }
}
