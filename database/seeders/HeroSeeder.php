<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $existingHero = DB::table('hero')->where('title', 'A creative design studio')->first();
        if (!$existingHero) {
            DB::table('hero')->insert([
                'title' => 'A creative design studio',
                'description' => "We're a creative design studio specializing in meeting the needs of the new generation. We offer innovative and cutting-edge design solutions to help our clients stand out in today's fast-paced.",
                'image' => 'assets/images/v1/hero-thumb.png',
                'users' => json_encode([
                    'assets/images/v1/user1.png',
                    'assets/images/v1/user3.png',
                    'assets/images/v1/user2.png',
                ]),
                'cta_text' => 'Book a free consultation',
                'cta_url' => route('contact'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
