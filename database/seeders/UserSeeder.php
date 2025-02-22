<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'nama' => 'Admin',
            'level' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt(123)
        ]);

        User::create([
            'nama' => 'Direktur',
            'level' => 'direktur',
            'email' => 'direktur@gmail.com',
            'password' => bcrypt(123)
        ]);

        User::create([
            'nama' => 'Bendahara',
            'level' => 'bendahara',
            'email' => 'bendahara@gmail.com',
            'password' => bcrypt(123)
        ]);

        User::create([
            'nama' => 'Konsumen',
            'level' => 'konsumen',
            'email' => 'konsumen@gmail.com',
            'password' => bcrypt(123)
        ]);



    }
}
