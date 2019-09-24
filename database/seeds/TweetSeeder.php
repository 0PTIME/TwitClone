<?php

use Carbon\Carbon;
use Illuminate\Database\Seeder;

class TweetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('yaps')->insert([
            array(
                'id' => '1',
                'user_id' => '1',
                'content' => 'Aenean vitae nunc in mi pulvinar egestas. Aliquam id rhoncus lectus. Fusce vel sapien ante. Integer ut cursus nunc.',
                'retweet_of' => null,
                'reply_of' => null,
                'created_at' => Carbon::now(),
            ),
            array(
                'id' => '2',
                'user_id' => '2',
                'content' => 'Aliquam sed congue ipsum. In quis vestibulum purus. Donec lectus dui, cursus eu hendrerit non, condimentum vel tortor. Pellentesque ut nunc eleifend, varius est non, facilisis justo.',
                'retweet_of' => null,
                'created_at' => Carbon::now(),
                'reply_of' => null,
            ),
            array(
                'id' => '3',
                'user_id' => '1',
                'content' => 'Suspendisse ligula orci, rutrum ut mollis non, commodo ut ligula. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.',
                'retweet_of' => null,
                'created_at' => Carbon::now(),
                'reply_of' => null,
            ),
            array(
                'id' => '4',
                'user_id' => '2',
                'content' => 'Vestibulum eu neque at tellus tristique volutpat. Proin vel mattis tellus, eget pellentesque sem. Pellentesque vitae lorem pulvinar, sollicitudin libero id, finibus sapien.',
                'retweet_of' => null,
                'created_at' => Carbon::now(),
                'reply_of' => null,
            ),
            array(
                'id' => '5',
                'user_id' => '3',
                'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur molestie eros vel vehicula rutrum. Duis a tincidunt orci. Ut et diam ut ipsum aliquam dignissim a id tellus. Sed id vestibulum nisl, eu convallis quam.',
                'retweet_of' => null,
                'created_at' => Carbon::now(),
                'reply_of' => null,
            ),
            array(
                'id' => '6',
                'user_id' => '1',
                'content' => '',
                'retweet_of' => '2',
                'created_at' => Carbon::now(),
                'reply_of' => null,
            ),
            array(
                'id' => '7',
                'user_id' => '4',
                'content' => '',
                'retweet_of' => '3',
                'created_at' => Carbon::now(),
                'reply_of' => null,
            ),
            array(
                'id' => '8',
                'user_id' => '3',
                'content' => '',
                'retweet_of' => '3',
                'created_at' => Carbon::now(),
                'reply_of' => null,
            ),
            array(
                'id' => '9',
                'user_id' => '2',
                'content' => '',
                'retweet_of' => '3',
                'created_at' => Carbon::now(),
                'reply_of' => null,
            ),
            array(
                'id' => '10',
                'user_id' => '1',
                'content' => '',
                'retweet_of' => '1',
                'created_at' => Carbon::now(),
                'reply_of' => null,
            ),
            array(
                'id' => '11',
                'user_id' => '1',
                'content' => '',
                'retweet_of' => '3',
                'created_at' => Carbon::now(),
                'reply_of' => null,
            ),
            array(
                'id' => '12',
                'user_id' => '1',
                'content' => '',
                'retweet_of' => '4',
                'created_at' => Carbon::now(),
                'reply_of' => null,
            ),
            array(
                'id' => '13',
                'user_id' => '1',
                'content' => '',
                'retweet_of' => '5',
                'created_at' => Carbon::now(),
                'reply_of' => null,
            ),
        ]);
    }
}
