<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $books = [
            [
                'title' => 'Clean Code',
                'author_id' => 1, // ID correspondiente a Robert Martin
                'publisher_id' => 2, // ID correspondiente a Addison-Wesley
                'published_year' => 2008,
                'isbn' => 9780132350884,
            ],
            [
                'title' => 'Refactoring',
                'author_id' => 2, // ID correspondiente a Martin Fowler
                'publisher_id' => 2, // ID correspondiente a Addison-Wesley
                'published_year' => 1999,
                'isbn' => 9780201485677,
            ],
            // Añade más libros aquí
        ];
        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
