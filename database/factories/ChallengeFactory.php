<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Challenge;
use Faker\Generator as Faker;

$factory->define(Challenge::class, function (Faker $faker) {
    return [
        'company_id'=>$faker->randomNumber(2),
        'name'=>$faker->text(10),
        'description'=>$faker->text(10),
    ];
});
