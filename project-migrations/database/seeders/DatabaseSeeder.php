<?php

use Illuminate\Database\Seeder;
use Database\Seeders\UserTableSeeder;
use Database\Seeders\MovieTableSeeder;
use Database\Seeders\CinemaTableSeeder;
use Database\Seeders\ShowtimeTableSeeder;

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
