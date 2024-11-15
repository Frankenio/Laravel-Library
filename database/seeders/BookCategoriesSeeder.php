<?php

namespace Database\Seeders;

use App\Models\BookCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bookCategories = [
            ['book_id' => 1, 'category_id' => 11], // 'Clean Code' como libro de la categoría 'Ingeniería de Software'
            ['book_id' => 1, 'category_id' => 12], // 'Clean Code' como libro de la categoría 'Arquitectura de Software'
            ['book_id' => 2, 'category_id' => 11], // 'Refactoring' como libro de la categoría 'Ingeniería de Software'
            ['book_id' => 2, 'category_id' => 12], // 'Refactoring' como libro de la categoría 'Arquitectura de Software'

            // Añade más relaciones aquí
        ];
        foreach ($bookCategories as $bookCategory) {
            BookCategory::create($bookCategory);
        }
    }
}
