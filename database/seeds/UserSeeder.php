<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            array(
                'id' => '1',
                'name' => config('seed.test_name'),
                'email' => config('seed.test_email'),
                'description' => config('seed.test_description'),
                'display_name' => config('seed.test_display_name'),
                'password' => Hash::make(config('seed.test_password')),
                'created_at' => Carbon::now(),
            ),
            array(
                'id' => '2',
                'name' => 'kappa123',
                'email' => 'kappa@123.com',
                'description' => 'kappa 123',
                'display_name' => 'Kappa',
                'password' => Hash::make('kappa'),
                'created_at' => Carbon::now(),
            ),
            array(
                'id' => '3',
                'name' => 'jebaitedyou',
                'email' => 'jebaited@lul.com',
                'description' => 'pepeD You Got Jebaited pepeD',
                'display_name' => 'Jebaited',
                'password' => Hash::make('jebaited'),
                'created_at' => Carbon::now(),
            ),
            array(
                'id' => '4',
                'name' => 'triharder',
                'email' => 'trihard@777.com',
                'description' => 'trihard 7',
                'display_name' => 'Trihard',
                'password' => Hash::make('trihard'),
                'created_at' => Carbon::now(),
            ),
            array(
                'id' => '5',
                'name' => 'vohihoisamod',
                'email' => 'jebaited@lul.com',
                'description' => 'VoHiYo',
                'display_name' => 'VoHiYo',
                'password' => Hash::make('vohiyo'),
                'created_at' => Carbon::now(),
            ),
        ]);
    }
}
