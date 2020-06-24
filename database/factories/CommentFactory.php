<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'commentable_id'=>$faker->randomNumber(2),
        'commentable_type'=>$faker->text(10),
        'description'=>$faker->text(10),
    ];
});
