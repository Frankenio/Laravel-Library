<?php

namespace Database\Seeders;

use App\Models\Description;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DescriptionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $descriptions = [
            [
                'book_id' => 1, // ID correspondiente al libro 'Clean Code'
                'summary' => 'A guide to writing clean, maintainable code.',
                'synopsis' => 'Clean Code by Robert Martin provides practical advice on writing cleaner, more efficient code with principles and real-world examples.',
                'number_of_pages' => 464,
            ],
            [
                'book_id' => 2, // ID correspondiente al libro 'Refactoring'
                'summary' => 'Techniques for improving existing code.',
                'synopsis' => 'Refactoring by Martin Fowler discusses how to refine and improve existing codebases while maintaining their functionality.',
                'number_of_pages' => 431,
            ],
            // Añade más descripciones aquí
        ];
        foreach ($descriptions as $description) {
            Description::create($description);
        }
    }
}
