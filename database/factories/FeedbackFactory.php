<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Feedback;
use Faker\Generator as Faker;

$factory->define(Feedback::class, function (Faker $faker) {
    return [
            'coordinator_id'=>$faker->randomNumber(2),
            'challenge_id'=>$faker->randomNumber(2),
            'description'=>$faker->text(10),
    ];
});
