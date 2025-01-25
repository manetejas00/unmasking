<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    public function run()
    {
        // Data for services to be inserted
        $services = [
            [
                'title' => 'UI/UX Design',
                'description' => 'Focusing on user interface (UI) and user experience (UX) design enhance the usability and accessibility of digital products & app.',
                'icon' => 'icon-design-tools',
                'image' => 'assets/images/service1.jpg',
                'active' => 1,
            ],
            [
                'title' => 'Graphic Design',
                'description' => 'Creating visual elements such as logos, branding materials, page layout techniques, brochures, & other marketing collateral.',
                'icon' => 'icon-branding',
                'image' => 'assets/images/service2.jpg',
                'active' => 1,
            ],
            [
                'title' => 'Web Design',
                'description' => 'Designing and developing websites to ensure they are visually look and appealing, user-friendly, and functional.',
                'icon' => 'icon-web',
                'image' => 'assets/images/service3.jpg',
                'active' => 1,
            ],
            [
                'title' => 'Motion Graphics',
                'description' => 'Creating animate graphics, videos for various purposes, including marketing and entertainment. To help sell a product or service.',
                'icon' => 'icon-design-thinking',
                'image' => 'assets/images/service4.jpg',
                'active' => 1,
            ],
        ];

        foreach ($services as $service) {
            // Check if the service already exists by title
            $existingService = DB::table('services')->where('title', $service['title'])->first();

            // If the service does not exist, insert it
            if (!$existingService) {
                DB::table('services')->insert($service);
            }
        }
    }
}
