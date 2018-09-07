<?php

use App\Resource;
use Faker\Generator as Faker;

$factory->define(Resource::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'source' => $faker->url,

    ];

});

