<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            "name"=> "Nattchi",
            "email"=> "nattchi@gmail.com",
            "password"=> bcrypt('password'),
            "alamat"=> "Kyoto, Japan",
            "no_telp"=> "12345678",
        ]);
        }
}
