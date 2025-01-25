<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProjectSeeder extends Seeder
{
    public function run()
    {
        $projects =  [
            [
                'meta_title' => 'Product Design Project',
                'meta_description' => 'Developing the look and feel of physical products, aesthetics, and functionality.',
                'main_title' => 'Product Design',
                'active' => true,
                'title' => 'Product Design',
                'description' => 'Developing the look and feel of physical products, aesthetics, and functionality.',
                'image' => 'assets/images/v1/project1.png',
                'portfolio_link' => route('singlePortfolio'),
                'slug' => 'product-design',
                'content' => 'Developing the aesthetics and usability of products.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'meta_title' => 'Logo and Branding',
                'meta_description' => 'Creating or refreshing a company\'s logo and developing a cohesive visual identity.',
                'main_title' => 'Logo and Branding',
                'active' => true,
                'title' => 'Logo and Branding',
                'description' => 'Creating or refreshing a company\'s logo and developing a cohesive visual identity.',
                'image' => 'assets/images/v1/project2.png',
                'portfolio_link' => route('singlePortfolio'),
                'slug' => 'logo-and-branding',
                'content' => 'Creating an impactful visual identity for businesses.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'meta_title' => 'App UI/UX Design',
                'meta_description' => 'Designing the UI/UX for mobile apps and web applications to ensure usability and engagement.',
                'main_title' => 'App UI/UX Design',
                'active' => true,
                'title' => 'App UI/UX Design',
                'description' => 'Designing the UI/UX for mobile apps and web applications to ensure usability & engagement.',
                'image' => 'assets/images/v1/project3.png',
                'portfolio_link' => route('singlePortfolio'),
                'slug' => 'app-ui-ux-design',
                'content' => 'Enhancing user experience with intuitive design.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'meta_title' => 'Packaging Design',
                'meta_description' => 'Creating packaging solutions for products that not only protect but attract customers on store shelves.',
                'main_title' => 'Packaging Design',
                'active' => true,
                'title' => 'Packaging Design',
                'description' => 'Creating packaging solutions for products that not only protect but attract customers on store shelves.',
                'image' => 'assets/images/v1/project4.png',
                'portfolio_link' => route('singlePortfolio'),
                'slug' => 'packaging-design',
                'content' => 'Designing packaging that grabs attention and keeps products safe.',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ];
        foreach ($projects as $project) {
            // Check if the service already exists by title
            $existingService = DB::table('projects')->where('title', $project['title'])->first();

            // If the service does not exist, insert it
            if (!$existingService) {
                DB::table('projects')->insert($project);
            }
        }
    }
}
