<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Copie extends Model
{
    /** @use HasFactory<\Database\Factories\CopieFactory> */
    use HasFactory;
    protected $table = 'copies';
    protected $fillable = [
        'book_id',
        'code_local',
        'status'
    ];

}
