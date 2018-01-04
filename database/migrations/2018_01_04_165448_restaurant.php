<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RestaurantAPP extends Migration
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
        Schema::create('restaurant', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('address', 100);
            $table->string('contact', 100);
            $table->string('service_type',50);
            $table->double('lat')->nullable();
            $table->double('lon')->nullable();
            $table->smallInteger('capacity');
            $table->string('food_speciality', 20)->nullable();

            $table->timestamps();
        });

        /**
         * create menus table
         */
        Schema::create('menus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->float('price');
            $table->integer('restaurant_id')->unsigned()->nullable();
            $table->foreign('restaurant_id')->references('id')->on('restaurant')->onDelete('cascade');

            $table->timestamps();
        });

        /**
         * create schedule table
         */
        Schema::create('schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->time('weekday_open');
            $table->time('weekday_close');
            $table->time('weekend_open');
            $table->time('weekend_close');
            $table->enum('holidays', ['T', 'F']);
            $table->time('holiday_open')->nullable();
            $table->time('holiday_close')->nullable();
            $table->integer('restaurant_id')->unsigned()->nullable();
            $table->foreign('restaurant_id')->references('id')->on('restaurant')->onDelete('cascade');

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
        //
    }
}
