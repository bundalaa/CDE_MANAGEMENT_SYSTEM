<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Supervisor;
use Faker\Generator as Faker;

$factory->define(Supervisor::class, function (Faker $faker) {
    return [
        'user_id'=>$faker->randomNumber(2),
        'bio'=>$faker->text(10),
        'title'=>$faker->text(10),
    ];
});
