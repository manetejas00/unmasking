<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropShapesColumnFromHeroesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hero', function (Blueprint $table) {
            // Drop the 'shapes' column
            $table->dropColumn('shapes');
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
            // If you need to reverse the migration, add back the 'shapes' column
            $table->json('shapes')->nullable();
        });
    }
}
