<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\diary;
use Faker\Generator as Faker;

$factory->define(diary::class, function (Faker $faker) {
    return [
        //
        'story'=> $this->faker->realText(rand(10,20)),
        'content'=> $this->faker->text(1000),
    ];
});
//factory(App\diary::class, 20)->create();