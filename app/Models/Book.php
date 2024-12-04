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
        'code_local', // Codigo local del libro
        'title', // Título del libro
        'author_id', // Autor del libro
        'publisher_id', // Editorial del libro
        'published_year', // Año de publicación del libro
        'category_id', // Categoría del libro
        'isbn', // ISBN del libro
        'shelf_number', // Número de estantería del libro
        'status', // Estado del libro
        'image',
    ];


}
