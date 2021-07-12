<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\store;
use Faker\Generator as Faker;

$factory->define(store::class, function (Faker $faker) {
    return [
        //
    	'store_name' => $this->faker->name,
        'phone' => $this->faker->phoneNumber,
        'email' => $this->faker->freeEmail,
        'street' => $this->faker->streetAddress,
        'city' => $this->faker->city,
        'zipcode' => $this->faker->postcode,
       	'country' => $this->faker->country,
    ];
});
