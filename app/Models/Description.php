<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    /** @use HasFactory<\Database\Factories\DescriptionFactory> */
    use HasFactory;
    protected $table = 'descriptions';
    protected $fillable = [
        'book_id',
        'summary',
        'synopsis',
        'number_of_pages',
    ];
}
