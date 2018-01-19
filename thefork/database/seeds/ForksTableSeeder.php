<?php

use App\Fork;
use Illuminate\Database\Seeder;

class ForksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('forks')->insert([
            'restaurant' => 'http://restaurant1.app/',
        ]);
        DB::table('forks')->insert([
            'restaurant' => 'http://restaurant2.app/',
        ]);
        DB::table('forks')->insert([
            'restaurant' => 'http://restaurant3.app/',
        ]);


    }
}
