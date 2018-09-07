<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ResourceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        factory(App\Resource::class, 2)->create()->afterCreating(App\Resource::class, function ($resource, $faker) {
            $resource->targets()->save(factory(App\Target::class)->make());
        });;
    }
}
