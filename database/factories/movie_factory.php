<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Movie;
use Faker\Generator as Faker;

$factory->define(Movie::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->word,
        'rating' => $faker->numberBetween(1,10),
        'awards' => $faker->numberBetween(0,15),
        'release_date' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'length' => $faker->numberBetween(30,210)
    ];
});
