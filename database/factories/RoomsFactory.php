<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Model\Hotels;
use App\Model\Rooms;
use Faker\Generator as Faker;

$factory->define(Rooms::class, function (Faker $faker) {
    return [
        'room_name' => $faker->word,
        'room_type' => $faker->randomElement(['single','double', 'triple', 'quad', 'queen', 'king']),
        'room_price' => $faker->randomNumber(3),
        'hotels_id' => function(){
        	return Hotels::all()->random()->id;
        },
        'room_status' => $faker->randomElement(['available' ,'booked'])
    ];
});