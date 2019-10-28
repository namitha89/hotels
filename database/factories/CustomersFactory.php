<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model\Customers;
use Faker\Generator as Faker;

$factory->define(Customers::class, function (Faker $faker) {
    return [
        //
        'customer_name' => $faker->word,
        'customer_email' => $faker->email,
    ];
});
