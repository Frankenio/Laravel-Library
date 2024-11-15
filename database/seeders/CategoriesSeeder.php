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
            ['name' => 'Programación'],
            ['name' => 'Desarrollo de Software'],
            ['name' => 'Desarrollo Web'],
            ['name' => 'Ciencia de Datos'],
            ['name' => 'Machine Learning'],
            ['name' => 'Inteligencia Artificial'],
            ['name' => 'Sistemas Operativos'],
            ['name' => 'Redes y Comunicaciones'],
            ['name' => 'Bases de Datos'],
            ['name' => 'Algoritmos y Estructuras de Datos'],
            ['name' => 'Ingeniería de Software'],
            ['name' => 'Arquitectura de Software'],
            ['name' => 'Matemáticas Computacionales'],
            ['name' => 'Seguridad Informática'],
            ['name' => 'Tesis y Proyectos'],
            ['name' => 'Metodologías Ágiles'],
            ['name' => 'Teoría de la Computación'],
            ['name' => 'Sistemas Distribuidos'],
            ['name' => 'Otros'],
        ];

        foreach ($categories as $category) {
            Categorie::create($category);
        }
    }
}
