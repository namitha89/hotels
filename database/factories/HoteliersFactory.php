<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Hoteliers;
use Faker\Generator as Faker;

$factory->define(Hoteliers::class, function (Faker $faker) {
    return [
        //
        'hotelier_name' => $faker->word,
        'hotelier_email' => $faker->email,
    ];
});

