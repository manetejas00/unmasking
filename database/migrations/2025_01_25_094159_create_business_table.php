<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusinessTable extends Migration
{
    public function up()
    {
        Schema::create('business', function (Blueprint $table) {
            $table->id();
            $table->string('meta_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->string('slug')->unique()->nullable();
            $table->boolean('active')->default(true);
            $table->string('main_title')->nullable();

            // Adding new fields for counters
            $table->integer('years_of_experience')->default(0);
            $table->integer('successful_projects')->default(0);
            $table->integer('client_satisfaction_rate')->default(0);

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('business');
    }
}
