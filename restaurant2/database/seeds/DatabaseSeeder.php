<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RestaurantsTableSeeder::class,
            MenusTableSeeder::class,
            SchedulesTableSeeder::class,
            ReservationsTableSeeder::class,
        ]);
    }
}
