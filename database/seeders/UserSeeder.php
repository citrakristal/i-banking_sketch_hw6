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
     */
    public function run(): void
    {
        User::create([
            'name' => 'Muh. Ilham',
            'email' => '1@gmail.com',
            // enkripsi password dengan Hash
            'password' => Hash::make('inipassword')
        ]);
    }
}
