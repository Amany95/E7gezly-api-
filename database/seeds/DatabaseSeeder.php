<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Doctor', 20)->create();
        factory('App\Patient', 15)->create();
        factory('App\Rating', 5)->create();
        factory('App\Booking', 10)->create();



    }
}
