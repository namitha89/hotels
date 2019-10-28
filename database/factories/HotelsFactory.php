<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Hoteliers;
use App\Model\Locations;
use App\Model\Hotels;
use Faker\Generator as Faker;

$factory->define(Hotels::class, function (Faker $faker) {
    return [
        //
        'hotel_name' => $faker->word,
        'hotel_rating' => $faker->numberBetween($min = 0, $max = 5),
        'hotel_category' => $faker->randomElement(['hotel', 'alternative', 'hostel', 'lodge', 'resort', 'guest-house']),
        'image' => $faker->imageUrl($width = 640, $height = 480, 'business'),
        'reputation' => $faker->numberBetween($min = 0, $max = 1000),
        'hotelier_id' => function(){
        	return Hoteliers::all()->random()->id;
        },
        'location_id' => function(){
        	return Locations::all()->random()->id;
        },
    ];
});
