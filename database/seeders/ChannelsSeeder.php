<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ChannelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('channels')->insert([

            [
                'id' => 1,
                'name' => 'History',
            ],

            [
                'id' => 2,
                'name' => 'MTV',
            ],

            [
                'id' => 3,
                'name' => 'SBT',
            ]

        ]);
    }
}
