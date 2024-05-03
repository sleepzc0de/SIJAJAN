<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = [
            [
            'name'=>'admin',
            'email'=>'admin@email.com',
            'role'=>'admin',
            'password'=> bcrypt('123'),
            ],
            [
            'name'=>'user',
            'email'=>'user@email.com',
            'role'=>'user',
            'password'=> bcrypt('123'),
            ],
        ];
    
        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
