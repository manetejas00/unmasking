<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddActiveToHeroesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hero', function (Blueprint $table) {
            $table->boolean('active')->default(true);  // Add the active column with a default value of true
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
            $table->dropColumn('active');  // Drop the active column if rolling back
        });
    }
}
