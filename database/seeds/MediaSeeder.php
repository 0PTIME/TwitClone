<?php

use Illuminate\Database\Seeder;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('media')->insert([
            array(
                'id' => '1',
                'yap_id' => '2',
                'file_name' => 'the-scoville-scale-scoville-heat-units-683x1024.jpg'
            ),
        ]);
    }
}
