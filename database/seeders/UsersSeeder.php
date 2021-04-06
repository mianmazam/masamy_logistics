<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        User::create([
            'f_name' => 'Admin',
            'l_name' => 'Admin',
            'user_name' => 'Admin',
            'email' => 'admin@gmail.com',
            'email_verified_at' => '2020-12-12',
            'password' => bcrypt('admin'),
            'cellNo' => '+923024618062',
            'Country' => 'Pakistan',
            'type' => USER_TYPES['admin'],
        ]);

        User::create([
            'f_name' => 'user',
            'l_name' => 'user',
            'user_name' => 'user',
            'email' => 'user@gmail.com',
            'email_verified_at' => '2020-12-12',
            'password' => bcrypt('admin'),
            'cellNo' => '+923024618062',
            'Country' => 'Pakistan',
            'type' => USER_TYPES['user'],
        ]);

        User::create([
            'f_name' => 'user2',
            'l_name' => 'user2',
            'user_name' => 'user2',
            'email' => 'user2@gmail.com',
            'email_verified_at' => '2020-12-12',
            'password' => bcrypt('admin'),
            'cellNo' => '+923024618062',
            'Country' => 'Pakistan',
            'type' => USER_TYPES['user'],
        ]);
    }
}
