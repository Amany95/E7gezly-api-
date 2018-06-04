<?php

use Faker\Generator as Faker;

$factory->define(App\Doctor::class, function (Faker $faker) {
    return [
        	'name' 			=> $faker->name,
            'specialist'	=> $faker->title,
            'fees'			=> $faker->numberBetween($min = 50, $max = 200),
            'city'			=> $faker->city
    ];
});
