<?php

use Faker\Generator as Faker;

$factory->define(App\Target::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'order' => $faker->numberBetween(1,100),
    ];
});
