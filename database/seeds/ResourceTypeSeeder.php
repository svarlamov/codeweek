<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class ResourceTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('resource_types')->insert([
            'id' => 1,
            'order' => 1,
            'name' => 'Lesson plan'
        ]);

        DB::table('resource_types')->insert([
            'id' => 2,
            'order' => 2,
            'name' => 'Video tutorial'
        ]);
        DB::table('resource_types')->insert([
            'id' => 3,
            'order' => 3,
            'name' => 'Publication'
        ]);
        DB::table('resource_types')->insert([
            'id' => 4,
            'order' => 4,
            'name' => 'Application'
        ]);
        DB::table('resource_types')->insert([
            'id' => 5,
            'order' => 5,
            'name' => 'Online course'
        ]);
        DB::table('resource_types')->insert([
            'id' => 6,
            'order' => 6,
            'name' => 'Article'
        ]);
        DB::table('resource_types')->insert([
            'id' => 7,
            'order' => 7,
            'name' => 'Website'
        ]);
        DB::table('resource_types')->insert([
            'id' => 8,
            'order' => 8,
            'name' => 'Infographic'
        ]);
        DB::table('resource_types')->insert([
            'id' => 9,
            'order' => 9,
            'name' => 'Game'
        ]);
        DB::table('resource_types')->insert([
            'id' => 10,
            'order' => 10,
            'name' => 'Guide'
        ]);
        DB::table('resource_types')->insert([
            'id' => 11,
            'order' => 11,
            'name' => 'Podcast'
        ]);
        DB::table('resource_types')->insert([
            'id' => 12,
            'order' => 12,
            'name' => 'Presentation'
        ]);
        DB::table('resource_types')->insert([
            'id' => 13,
            'order' => 13,
            'name' => 'Kit'
        ]);
        DB::table('resource_types')->insert([
            'id' => 14,
            'order' => 14,
            'name' => 'Repository'
        ]);


    }
}




