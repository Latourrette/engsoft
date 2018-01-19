<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

$factory->define(App\Restaurant::class, function (Faker\Generator $faker) {
    return [
        'name' => 'MecRonaldo',
        'address' => $faker->address,
        'contact' => $faker->phoneNumber,
        'service_type' => 'Take-away',
        'capacity' => $faker->numberBetween(50, 100),
        'food_speciality' => 'FastFood',
        'lat' => $faker->latitude,
        'lon' => $faker->longitude,
    ];
});

$factory->define(App\Menu::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'price' => $faker->numberBetween(5, 15),
        'restaurant_id' => 1,
    ];
});

$factory->define(App\Schedule::class, function () {
    return [
        'weekday_open' => new DateTime('0800'),
        'weekday_close' => new DateTime('0200'),
        'weekend_open' => new DateTime('0800'),
        'weekend_close' => new DateTime('0400'),
        'restaurant_id' => 1,
    ];
});


