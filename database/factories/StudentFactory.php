<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'user_id'=>$faker->randomNumber(2),
        'team_id'=>$faker->randomNumber(2),
        'degree_programme'=>$faker->text(10),
        'year_of_study'=>$faker->text(10),
    ];
});
