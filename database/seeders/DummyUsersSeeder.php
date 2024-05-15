<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=>'Mbak User',
                'email'=>'mbakuser@gmail.com',
                'role'=>'user',
                'password'=>bcrypt('123456')
            ],
            [
                'name'=>'Mbak Admin',
                'email'=>'mbakadmin@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('123456')
            ],
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
