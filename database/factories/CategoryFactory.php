<?php

use Faker\Generator as Faker;

$factory->define(App\Category::class, function (Faker $faker) {
    return [
        'slug' => $faker->slug,
        'title:en' => $faker->word,
        'title:hr' => $faker->word,
    ];
});