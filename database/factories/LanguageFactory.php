<?php

use Faker\Generator as Faker;

$factory->define(App\Language::class, function (Faker $faker) {
    return [
        'iso' => $faker->countryISOAlpha3,
        'name' => $faker->word
    ];
});
