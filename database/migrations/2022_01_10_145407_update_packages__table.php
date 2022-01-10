<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('packages', function (Blueprint $table) {

            $table->string('title')->first()->change();
            $table->smallInteger('hotel_stars')->after('column')->change();
            $table->string('airline_name')->default("Neos")->change();
            $table->text('description')->nullable(true)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('packages', function (Blueprint $table) {

            $table->string('title')->change();
            $table->smallInteger('hotel_stars')->change();
            $table->string('airline_name')->change();
            $table->text('description')->change();
        });
    }
}
