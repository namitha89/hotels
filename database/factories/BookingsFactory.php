<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Model\Hotels;
use App\Model\Rooms;
use App\Model\customers;
use App\Model\Bookings;
use Faker\Generator as Faker;

$factory->define(Bookings::class, function (Faker $faker) {
    return [
        //
        'hotel_id' => function(){
        	return Hotels::all()->random()->id;
        },
        'room_id' => function(){
        	return Rooms::all()->random()->id;
        },
        'customer_id' => function(){
        	return Customers::all()->random()->id;
        },
        'booking_status' => $faker->randomElement(['booked' ,'pending','failed'])
    ];
});
