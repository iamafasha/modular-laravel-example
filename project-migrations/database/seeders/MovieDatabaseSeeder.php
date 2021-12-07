<?php

namespace Database\Seeders;

use Modules\Movie\Database\Seeders\MovieTableSeeder;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class MovieDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(MovieTableSeeder::class);
    }
}
