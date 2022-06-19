<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
                'name' => 'Swan Pyae Sone',
                'email' => 'swan@gmail.com',
                'password' => Hash::make('12345678'),
        ]);
        $user = User::create([
                'name' => 'Luwix',
                'email' => 'luwix@gmail.com',
                'password' => Hash::make('12345678'),
        ]);
        $user = User::create([
                'name' => 'Miko',
                'email' => 'miko@gmail.com',
                'password' => Hash::make('12345678'),
        ]);
    }
}