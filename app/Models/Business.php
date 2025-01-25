<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;



class Business extends Model
{
    use HasFactory;
    protected $table = 'business';
    protected $fillable = [
        'meta_title',
        'meta_description',
        'slug',
        'active',
        'main_title',
        'years_of_experience',
        'successful_projects',
        'client_satisfaction_rate',
        'main_description',
        'youtube_link',
        'video_bg_image',
    ];

    protected static function booted()
    {
        static::saving(function ($business) {
            // Generate the initial slug
            $slug = '/business/' . Str::slug($business->main_title);

            // Check if the slug already exists and make it unique
            $originalSlug = $slug;
            $count = 1;

            while (Business::where('slug', $slug)->exists()) {
                // Append a number to the slug if it already exists
                $slug = $originalSlug . '-' . $count;
                $count++;
            }

            // Assign the unique slug to the business
            $business->slug = $slug;
        });
    }
}
