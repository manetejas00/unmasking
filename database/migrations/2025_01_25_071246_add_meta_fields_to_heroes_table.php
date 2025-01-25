<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddMetaFieldsToHeroesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hero', function (Blueprint $table) {
            $table->string('meta_title')->nullable(); // Add meta_title field
            $table->text('meta_description')->nullable(); // Add meta_description field
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hero', function (Blueprint $table) {
            $table->dropColumn(['meta_title', 'meta_description']);
        });
    }
}
