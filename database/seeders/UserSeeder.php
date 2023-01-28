<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       $create = User::insert([
        'name' => "Gautam",
        'email' => "Gautam@swayamkikhoj.com",
        'password' => Hash::make('Gautam@swayamkikhoj')
       ]);

    }
}
