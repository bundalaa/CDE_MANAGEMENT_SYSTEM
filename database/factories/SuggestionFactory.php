<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Suggestion;
use Faker\Generator as Faker;

$factory->define(Suggestion::class, function (Faker $faker) {
    return [
        'category_id'=>$faker->randomNumber(2),
        'company_id'=>$faker->randomNumber(2),
        'description'=>$faker->text(10),
    ];
});
