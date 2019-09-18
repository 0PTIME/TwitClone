<?php

use Illuminate\Database\Seeder;

class LikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('likes')->insert([
            array(
                'user_id' => '1',
                'yap_id' => '1',
            ),
            array(
                'user_id' => '1',
                'yap_id' => '2',
            ),
            array(
                'user_id' => '1',
                'yap_id' => '3',
            ),
            array(
                'user_id' => '1',
                'yap_id' => '4',
            ),
            array(
                'user_id' => '1',
                'yap_id' => '5',
            ),
        ]);
    }
}
