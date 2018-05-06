<?php

use Faker\Generator as Faker;

$factory->define(App\Ingredient::class, function (Faker $faker) {
    return [
        'slug' => $faker->slug,
        'title:en' => $faker->words(3, true),
        'title:hr' => $faker->words(3, true),
    ];
});