<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class BusinessSeeder extends Seeder
{
    public function run()
    {
        $existingHero = DB::table('business')->where('main_title', 'We make your business stand out')->first();
        if (!$existingHero) {
            DB::table('business')->insert([
                'meta_title' => 'Business Solutions - We Make Your Business Stand Out',
                'meta_description' => 'Our business solutions help you stand out and succeed in the competitive market.',
                'slug' => Str::slug('We make your business stand out'),
                'active' => true,
                'main_title' => 'We make your business stand out',

                // Adding values for the new fields
                'years_of_experience' => 15,
                'successful_projects' => 120,
                'client_satisfaction_rate' => 100,
            ]);
        }
    }
}
