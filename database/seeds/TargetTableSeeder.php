<?php

use Illuminate\Database\Seeder;

class TargetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //
        DB::table('targets')->insert([
            'id' => 1,
            'order' => 1,
            'name' => 'Pre-primary education'
        ]);
        DB::table('targets')->insert([
            'id' => 2,
            'order' => 2,
            'name' => 'Primary school (5-12)'
        ]);
        DB::table('targets')->insert([
            'id' => 3,
            'order' => 3,
            'name' => 'Lower secondary school (12-16)'
        ]);
        DB::table('targets')->insert([
            'id' => 4,
            'order' => 4,
            'name' => 'Upper secondary school (16-18)'
        ]);
        DB::table('targets')->insert([
            'id' => 5,
            'order' => 5,
            'name' => 'Higher education'
        ]);
        DB::table('targets')->insert([
            'id' => 6,
            'order' => 6,
            'name' => 'Special education'
        ]);
        DB::table('targets')->insert([
            'id' => 7,
            'order' => 7,
            'name' => 'Professional development'
        ]);
        DB::table('targets')->insert([
            'id' => 8,
            'order' => 8,
            'name' => 'Policy-making'
        ]);
        DB::table('targets')->insert([
            'id' => 9,
            'order' => 9,
            'name' => 'Library'
        ]);
        DB::table('targets')->insert([
            'id' => 10,
            'order' => 10,
            'name' => 'Other'
        ]);
    }
}


