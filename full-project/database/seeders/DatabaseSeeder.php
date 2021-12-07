<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Modules\User\Database\Seeders\UserTableSeeder;
use Modules\Cinema\Database\Seeders\CinemaTableSeeder;
use Modules\Movie\Database\Seeders\MovieTableSeeder;
use Modules\Showtime\Database\Seeders\ShowtimeTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(CinemaTableSeeder::class);
        $this->call(MovieTableSeeder::class);
        $this->call(ShowtimeTableSeeder::class);
    }
}
