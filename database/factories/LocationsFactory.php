<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Locations;
use Faker\Generator as Faker;

$factory->define(Locations::class, function (Faker $faker) {
    return [
        //
        "city"=> $faker->city,
        "state"=> $faker->state,
        "country"=> $faker->country,
        "postalcode"=> $faker->postcode,
        "address" => $faker->address,
    ];
});
