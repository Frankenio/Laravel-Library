<?php

namespace Database\Seeders;

use App\Models\Categorie;
use Illuminate\Database\Seeder;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Libros'],
            ['name' => 'Tesis'],
            ['name' => 'Proyectos'],
            ['name' => 'Otros'],
            // Añade más categorías aquí
        ];

        foreach ($categories as $category) {
            Categorie::create($category);
        }
    }
}
