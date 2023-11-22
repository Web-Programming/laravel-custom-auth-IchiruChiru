<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AkunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'username' => 'Richie',
                'name' => 'AkunAdmin',
                'email' => 'Richie@gmail.com',
                'level' => 'admin',
                'password' => Hash::make('123456')
            ],

            [
                'username' => 'Ichiru',
                'name' => 'AkunUser1',
                'email' => 'Ichiru@gmail.com',
                'level' => 'user',
                'password' => Hash::make('123456')
            ],
            [
                'username' => 'Chiru',
                'name' => 'AkunUser2',
                'email' => 'Chiru@gmail.com',
                'level' => 'user',
                'password' => Hash::make('123456')
            ],

        ];

        foreach ($user as $key => $value) {
            User::create($value);
        }
    }
}

