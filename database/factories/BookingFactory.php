<?php

use Faker\Generator as Faker;
use App\Doctor;

use App\Patient;
$factory->define(App\Booking::class, function (Faker $faker) {
    return [
         'doctor_id'	=> function()
    	{
    		return Doctor::all()->random(); 
    	},
         'patient_id'		=> function()
    	{
    		return Patient::all()->random(); 
    	},
         'status'	=> $faker->numberBetween(1,3)

    ];
});
