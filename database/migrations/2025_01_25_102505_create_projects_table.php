<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();  // Auto-increment primary key
            $table->string('meta_title')->nullable();  // Meta title for SEO
            $table->text('meta_description')->nullable();
            $table->string('main_title')->nullable();  // Meta description for SEO
            $table->boolean('active')->default(true);  // Whether the project is active
            $table->string('title')->nullable();  // Project title
            $table->text('description')->nullable();  // Project description
            $table->string('image')->nullable();  // Path to the project image (e.g., 'assets/images/v1/project1.png')
            $table->string('portfolio_link')->nullable();
            $table->string('slug')->nullable();
            $table->string('content')->nullable(); // The link to the single portfolio page
            $table->timestamps();  // Timestamps for created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
