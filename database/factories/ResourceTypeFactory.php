<?php

use Faker\Generator as Faker;

$factory->define(App\ResourceType::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'order' => $faker->numberBetween(1,100)
    ];
});
