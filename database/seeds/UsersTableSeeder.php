<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'admin',
                'email' => 'admin@sobeys.com',
                'password' => bcrypt('secret'),
                'longitude' => -79.3832,
                'latitude' => 43.6532
            ]
        ]);
    }
}