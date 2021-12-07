<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['julius idowu', 'juliusidowu@yahoo.com', Hash::make('admin')],
            ['vascon admin', 'admin@vascon.edu.ng', Hash::make('julipels')],
        ];

        foreach ($users as $user) {
            DB::table('users')->insert([
                'name' => $user[0],
                'email' => $user[1],
                'password' => $user[2]
            ]);
        }
    }
}
