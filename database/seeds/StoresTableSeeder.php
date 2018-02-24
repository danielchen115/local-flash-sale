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
    }
}
