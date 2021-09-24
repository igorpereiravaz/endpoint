<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
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
                'id' => 1,
                'name' => 'Brian',
            ],

            [
                'id' => 2,
                'name' => 'Bruno',
            ],

            [
                'id' => 3,
                'name' => 'Otavio',
            ]

        ]);
    }
}
