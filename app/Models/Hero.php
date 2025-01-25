<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hero extends Model
{
    use HasFactory;

    // Define the table name
    protected $table = 'hero';

    // Allow mass assignment for these columns
    protected $fillable = [
        'title',
        'description',
        'image',
        'users',
        'cta_text',
        'cta_url',
        'shapes',
        'active',
        'meta_title', // Add meta_title here
        'meta_description', // Add meta_description here
    ];

    // Cast JSON columns to arrays
    protected $casts = [
        'users' => 'array',
        'shapes' => 'array',
    ];

    
}
