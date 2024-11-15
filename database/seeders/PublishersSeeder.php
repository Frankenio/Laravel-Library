<?php

namespace Database\Seeders;

use App\Models\Publisher;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublishersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $publishers = [
            ['name' => 'Prentice Hall'],
            ['name' => 'Addison-Wesley'],
            ['name' => 'O’Reilly Media'],
            ['name' => 'Manning Publications'],
            ['name' => 'Pearson Education'],
            // Añade más editoriales aquí
        ];
        foreach ($publishers as $publisher) {
            Publisher::create($publisher);
        }
    }
}
