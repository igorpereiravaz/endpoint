<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WatchedTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('watched_time')->insert([

            [
                'id' => 1,
                'user_id' => 1,
                'channel_id' => 1,
                'minutes' => 100,
                'date' => '2021-01-01',
            ],

            [
                'id' => 2,
                'user_id' => 1,
                'channel_id' => 1,
                'minutes' => 180,
                'date' => '2021-01-02',
            ],

            [
                'id' => 3,
                'user_id' => 1,
                'channel_id' => 1,
                'minutes' => 150,
                'date' => '2021-01-03',
            ],

            [
                'id' => 4,
                'user_id' => 1,
                'channel_id' => 1,
                'minutes' => 110,
                'date' => '2021-01-04',
            ],

            [
                'id' => 5,
                'user_id' => 2,
                'channel_id' => 1,
                'minutes' => 110,
                'date' => '2021-01-04',
            ],

            [
                'id' => 6,
                'user_id' => 2,
                'channel_id' => 1,
                'minutes' => 140,
                'date' => '2021-01-05',
            ],

            [
                'id' => 7,
                'user_id' => 2,
                'channel_id' => 1,
                'minutes' => 190,
                'date' => '2021-01-06',
            ],

            [
                'id' => 8,
                'user_id' => 3,
                'channel_id' => 1,
                'minutes' => 170,
                'date' => '2021-01-01',
            ],

            [
                'id' => 9,
                'user_id' => 3,
                'channel_id' => 1,
                'minutes' => 120,
                'date' => '2021-01-02',
            ],

            [
                'id' => 10,
                'user_id' => 3,
                'channel_id' => 1,
                'minutes' => 130,
                'date' => '2021-01-03',
            ],

            [
                'id' => 11,
                'user_id' => 1,
                'channel_id' => 2,
                'minutes' => 130,
                'date' => '2021-01-03',
            ],

            [
                'id' => 12,
                'user_id' => 2,
                'channel_id' => 2,
                'minutes' => 130,
                'date' => '2021-01-03',
            ],

            [
                'id' => 13,
                'user_id' => 3,
                'channel_id' => 2,
                'minutes' => 125,
                'date' => '2021-01-03',
            ],

            [
                'id' => 14,
                'user_id' => 1,
                'channel_id' => 2,
                'minutes' => 110,
                'date' => '2021-01-05',
            ],

            [
                'id' => 15,
                'user_id' => 1,
                'channel_id' => 2,
                'minutes' => 100,
                'date' => '2021-01-01',
            ],

            [
                'id' => 16,
                'user_id' => 2,
                'channel_id' => 2,
                'minutes' => 120,
                'date' => '2021-01-01',
            ],

            [
                'id' => 17,
                'user_id' => 3,
                'channel_id' => 2,
                'minutes' => 120,
                'date' => '2021-01-01',
            ],




        ]);
    }
}
