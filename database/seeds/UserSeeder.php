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
                'name' => 'Jebaitedyou',
                'email' => 'jebaited@lul.com',
                'description' => 'pepeD You Got Jebaited pepeD',
                'display_name' => 'Jebaited',
                'password' => Hash::make('jebaited'),
                'created_at' => Carbon::now(),
            ),
        ]);
    }
}
