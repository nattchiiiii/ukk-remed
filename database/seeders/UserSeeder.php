<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
            'name' => 'nattchi',
             'email' => 'nattchi@gmail.com',
            'password => bcrypt('password'),
            'alamat' => 'Kyoto, Japan',
            'no_hp' => '12345678',
            ]);
    }
}
