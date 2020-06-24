<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Schedule;
use Faker\Generator as Faker;

$factory->define(Schedule::class, function (Faker $faker) {
    return [
        'description'=>$faker->text(10),
            'datetime'=>$faker->iso8601($max = 'now'),
    ];
});
