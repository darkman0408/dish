<?php

use Faker\Generator as Faker;

$factory->define(App\Tag::class, function (Faker $faker) {
    return [
        'slug' => $faker->slug,
        'title:en' => $faker->words(3, true),
        'title:hr' => $faker->words(3, true),
    ];
});