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

        $user = [
            [
                'name' => 'Administrator',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin123'),
                'level' => 1
            ],
            [
                'name' => 'Kasir1',
                'email' => 'kasir1@gmail.com',
                'password' => bcrypt('kasir1'),
                'level' => 2
            ],
            [
                'name' => 'Kasir2',
                'email' => 'kasir2@gmail.com',
                'password' => bcrypt('kasir2'),
                'level' => 2
            ],

        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}
