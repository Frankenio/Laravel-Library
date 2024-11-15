<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExternalReader extends Model
{
    /** @use HasFactory<\Database\Factories\ExternalReaderFactory> */
    use HasFactory;
    protected $table = 'external_readers';
    protected $fillable = [
        'code',
        'first_name',
        'last_name',
        'birth_date',
        'nationality',
        'email',
        'phone',
        'address',
    ];
}
