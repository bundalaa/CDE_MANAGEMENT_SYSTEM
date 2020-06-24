<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Report;
use Faker\Generator as Faker;

$factory->define(Report::class, function (Faker $faker) {
    return [
        'team_id'=>$faker->randomNumber(2),
        'supervisor_id'=>$faker->randomNumber(2),
        'status'=>$faker->text(10),
        'content'=>$faker->text(10),
    ];
});
