<?php

namespace Modules\Cinema\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;




class CinemaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cinemas = [
            ['Oshodi Fun zone', 'Oshodi'],
            ['Lekki Amusement Park', 'Lekki Phase 1'],
            ['Ikoyoi zone', 'Ikoyi']
        ];

        foreach ($cinemas as $cinema) {
            DB::table('cinemas')->insert([

                'name' => $cinema[0],
                'location' => $cinema[1]

            ]);
        }
    }
}
