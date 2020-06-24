<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\IdentifiedChallenge;
use Faker\Generator as Faker;

$factory->define(IdentifiedChallenge::class, function (Faker $faker) {
    return [
        'name'=>$faker->text(10),
        'description'=>$faker->text(10),
    ];
});
