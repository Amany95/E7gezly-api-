<?php

use Faker\Generator as Faker;

$factory->define(App\Patient::class, function (Faker $faker) {
    return [
        	'name' 			=> $faker->name,
            'city'			=> $faker->city
    ];
});
