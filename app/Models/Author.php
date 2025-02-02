<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    /** @use HasFactory<\Database\Factories\AuthorFactory> */
    use HasFactory;
    protected $table = 'authors';
    protected $fillable = [
        'first_name',
        'last_name',
        'birth_date',
        'nationality',
    ];
}
