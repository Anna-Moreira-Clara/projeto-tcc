<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([

            [
                'name' => 'Danielle Maria',
                'username' => 'dani',
                'email'=> 'dani@maria.com.br',
                'role' => 'admin',
                'status' =>'active',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'Anna Clara',
                'username' => 'anna',
                'email'=> 'anna@clara.com.br',
                'role' => 'user',
                'status' =>'active',
                'password' => bcrypt('12345678')
            ]

        ]);
    }
}
