<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        /**
         * Create restaurant table
         */
        Schema::create('restaurants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('address', 100);
            $table->string('contact', 100);
            $table->string('service_type', 50);
            $table->smallInteger('capacity');
            $table->string('food_speciality', 20)->nullable();
            $table->double('lat')->nullable();
            $table->double('lon')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('restaurants');
    }
}
