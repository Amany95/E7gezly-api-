<?php

use Faker\Generator as Faker;
use App\Doctor;

use App\Patient;
$factory->define(App\Rating::class, function (Faker $faker) {
    return [
         'doctor_id'	=> function()
    	{
    		return Doctor::all()->random(); 
    	},
         'p_id'		=> function()
    	{
    		return Patient::all()->random(); 
    	},
         'stars'	=> $faker->numberBetween(0,5)

    ];
});
