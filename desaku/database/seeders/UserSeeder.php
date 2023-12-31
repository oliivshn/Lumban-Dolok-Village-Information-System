<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
        $data = array(
            [
                
                'email' => 'admin@gmail.com',
                'username' => 'admin',
                'password' => Hash::make('password'),
                'role' => 'a'
            ]
        );
        foreach($data AS $d){
            User::create([
                'email' => $d['email'],
                'username' => $d['username'],
                'password' => $d['password'],
                'role' => $d['role'],
            ]);
        }
    }

}