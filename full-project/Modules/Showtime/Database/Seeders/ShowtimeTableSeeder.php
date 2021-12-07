<?php

namespace Modules\Showtime\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShowtimeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = $faker = \Faker\Factory::create();

        $showtimes = [
            [
                '08:21:44', '15:21:44', '2021-03-29',
                $faker->randomElement([1, 2, 3, 4]), $faker->randomElement([1, 2, 3]),
            ],

            [
                '10:21:44', '16:21:44', '2021-03-28',
                $faker->randomElement([1, 2, 3, 4]), $faker->randomElement([1, 2, 3,]),
            ],

            [
                '09:21:44', '18:21:44', '2021-05-27',
                $faker->randomElement([1, 2, 3, 4]), $faker->randomElement([1, 2, 3]),
            ],

            [
                '10:21:44', '19:21:44', '2021-03-26',
                $faker->randomElement([1, 2, 3, 4]), $faker->randomElement([1, 2, 3]),
            ],

            [
                '09:21:44', '17:21:46', '2021-03-31',
                $faker->randomElement([1, 2, 3, 4, 5]), $faker->randomElement([1, 2, 3]),
            ],

        ];

        foreach ($showtimes as $showtime) {
            DB::table('showtimes')->insert([
                'first_show' => $showtime[0],
                'second_show' => $showtime[1],
                'date' => $showtime[2],
                'movie_id' => $showtime[3],
                'cinema_id' => $showtime[4],
            ]);
        }
    }
}
