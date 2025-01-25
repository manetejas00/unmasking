<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Project extends Model
{
    use HasFactory;

    // Specify the table name if it's not the plural of the model
    protected $table = 'projects';

    // Allow mass assignment on these fields
    protected $fillable = [
        'meta_title',
        'meta_description',
        'main_title',
        'active',
        'title',
        'description',
        'image',
        'portfolio_link',
        'slug',
        'content',
    ];

    // Optionally, specify hidden fields (e.g., for security purposes, like passwords, tokens, etc.)
    protected $hidden = [];

    // Automatically convert timestamps to Carbon instances
    protected $casts = [
        'active' => 'boolean',
    ];

    protected static function booted()
    {
        static::saving(function ($project) {
            // Generate the initial slug
            $slug = '/project/' . Str::slug($project->title);
            // Check if the slug already exists and make it unique
            $originalSlug = $slug;
            $count = 1;
            while (Project::where('slug', $slug)->exists()) {
                // Append a number to the slug if it already exists
                $slug = $originalSlug . '-' . $count;
                $count++;
            }
            // Assign the unique slug to the project
            $project->slug = $slug;
        });
    }
}
