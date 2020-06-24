<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Attendance;
use Faker\Generator as Faker;

$factory->define(Attendance::class, function (Faker $faker) {
    return [
        'student_id'=>$faker->randomNumber(2),
        'name'=>$faker->text(10),
        'description'=>$faker->text(10),
        'status'=>$faker->text(10),
        'date'=>$faker->iso8601($max = 'now'),
    ];
});
