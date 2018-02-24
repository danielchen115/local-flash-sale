<?php

use Illuminate\Database\Seeder;

class StoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert([
            [
                'name' => 'Sobeys',
                'latitude' => 43.845075,
                'longitude' => -79.071405,
            ]
        ]);
        DB::table('stores')->insert([
            [
                'name' => 'Longo\'s',
                'latitude' => 43.868475,
                'longitude' => -79.229872,
            ]
        ]);
        DB::table('stores')->insert([
            [
                'name' => 'Food Basics',
                'latitude' => 43.770282,
                'longitude' => -79.185012,
            ]
        ]);
        DB::table('stores')->insert([
            [
                'name' => 'No Frills',
                'latitude' => 43.769113,
                'longitude' => -79.186793,
            ]
        ]);
        DB::table('stores')->insert([
            [
                'name' => 'Metro',
                'latitude' => 43.788035,
                'longitude' => -79.140192,
            ]
        ]);
    }
}
