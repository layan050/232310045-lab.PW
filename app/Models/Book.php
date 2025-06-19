<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'author',
        'publisher',
        'year_published',
        'available'
    ];

    protected $casts = [
        'available' => 'boolean',
        'year_published' => 'integer'
    ];
}