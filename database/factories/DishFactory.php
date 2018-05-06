<?php

use Faker\Generator as Faker;

$factory->define(App\Dish::class, function (Faker $faker) {   
    return [
        'name' => $faker->sentence,
        //'deleted_at' => $faker->unixTime,
        'description:en' => $faker->country,
        'description:hr' => $faker->country,
        'title:en' => $faker->company,
        'title:hr' => $faker->company,
    ];
});