<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Team;
use Faker\Generator as Faker;

$factory->define(Team::class, function (Faker $faker) {
    return [
        'category_id'=>$faker->randomNumber(2),
        'supervisor_id'=>$faker->randomNumber(2),
    ];
});
