<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'nom' => 'ANZIAN',
            'prenom' => 'Yannick',
            'email' => 'admin@example.com',
            'role' => 'Admin',
            'password' => Hash::make('12345678'),
            'photo' => 'images/users/avatar.png',
            'created_at'=> now(),
        ]);
        DB::table('users')->insert([
            'nom' => 'GUI',
            'prenom' => 'Parfait',
            'email' => 'membre@example.com',
            'role' => 'Membre',
            'password' => Hash::make('12345678'),
            'photo' => 'images/users/avatar.png',
            'created_at'=> now(),
        ]);
    }
}
