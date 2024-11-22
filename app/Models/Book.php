<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    /** @use HasFactory<\Database\Factories\BookFactory> */
    use HasFactory;
    protected $table = 'books';
    protected $fillable = [
        'code_local',
        'title',
        'author_id',
        'publisher_id',
        'published_year',
        'category_id',
        'isbn',
        'shelf_number',
        'status',
        'image',
    ];
}
