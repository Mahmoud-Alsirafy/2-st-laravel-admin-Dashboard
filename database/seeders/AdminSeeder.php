<?php

namespace Database\Seeders;

// use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456789mM$'), // متنساش تشفره
            'role'=>'admin',
            'gender'=>'1',
            'permission'=>['view.user'],
        ]);
        User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('123456789mM$'), // متنساش تشفره
            'role'=>'user',
            'gender'=>'1',
            'permission'=>[],
        ]);
        User::create([
            'name' => 'wael',
            'email' => 'wael@gmail.com',
            'password' => Hash::make('123456789mM$'), // متنساش تشفره
            'role'=>'user',
            'gender'=>'1',
            'permission'=>[],
        ]);
    }
}
