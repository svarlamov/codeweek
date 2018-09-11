<?php

use App\Resource;
use Faker\Generator as Faker;

$factory->define(Resource::class, function (Faker $faker) {

    return [
        'name' => $faker->word,
        'source' => $faker->url,

    ];

})->afterCreating(App\Resource::class, function ($resource, $faker) {
    $resource->targets()->save(factory(App\Target::class)->make());
})->afterCreating(App\Resource::class, function ($resource, $faker) {
    $resource->resource_types()->save(factory(App\ResourceType::class)->make());
})->afterCreating(App\Resource::class, function ($resource, $faker) {
    $resource->languages()->save(factory(App\Language::class)->make());
});

