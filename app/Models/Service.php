<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class Service extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'icon', 'active', 'image', 'main_title', 'content', 'meta_title', 'meta_description', 'slug'];
    protected static function booted()
    {
        static::saving(function ($service) {
            // Generate the initial slug
            $slug = '/service/' . Str::slug($service->title);

            // Check if the slug already exists and make it unique
            $originalSlug = $slug;
            $count = 1;

            while (Project::where('slug', $slug)->exists()) {
                // Append a number to the slug if it already exists
                $slug = $originalSlug . '-' . $count;
                $count++;
            }

            // Assign the unique slug to the service
            $service->slug = $slug;
        });
    }
}
