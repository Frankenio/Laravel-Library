<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reader extends Model
{
    /** @use HasFactory<\Database\Factories\ReaderFactory> */
    use HasFactory;
    protected $table = 'readers';
    protected $fillable = [
        'code',
        'first_name',
        'last_name',
        'birth_date',
        'nationality',
        'email',
        'phone',
        'address',
        'role',
    ];
}
