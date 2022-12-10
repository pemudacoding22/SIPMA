<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert(
            [
                [
                    'username' => 'admin',
                    'password' => bcrypt('rahasia'),
                    'phone' => '081234567890',
                    'address' => 'Jonggol',
                    'status' => 'active'
                ],
                [
                    'username' => 'dosen',
                    'password' => bcrypt('rahasia'),
                    'phone' => '081234567890',
                    'address' => 'Jonggol',
                    'status' => 'active'
                ],
                [
                    'username' => 'reviewer',
                    'password' => bcrypt('rahasia'),
                    'phone' => '081234567890',
                    'address' => 'Jonggol',
                    'status' => 'active'
                ]
            ]
        );
    }
}
