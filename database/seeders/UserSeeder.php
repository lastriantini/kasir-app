<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'kasir',
                'email' => 'kasir1@gmail.com',
                'role' => 'kasir',
                'password' => Hash::make("123"),
                'kode_pegawai' => "222890"
            ],
            [
                'name' => 'admin',
                'email' => 'admin1@gmail.com',
                'role' => 'admin',
                'password' => Hash::make("123"),
                'kode_pegawai' => "111890"
            ],
        ]);
    }
}
