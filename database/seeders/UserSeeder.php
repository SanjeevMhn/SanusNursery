<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => '123456',
                'role' => 'admin'
            ],
            [
                'name' => 'user',
                'email' => 'user@user.com',
                'password' => '123456',
                'role' => 'user'
            ]
        ];

        User::insert($data);
    }
}
