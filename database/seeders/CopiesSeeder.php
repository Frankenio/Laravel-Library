<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CopiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $copies = [
            [
                'book_id' => 1,
                'code_local' => 'CC12345',
                'status' => 'disponible',
            ],
            [
                'book_id' => 2,
                'code_local' => 'RF67890',
                'status' => 'disponible',
            ],
        ];
    }
}
