<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserProfileSeeder extends Seeder
{
    public function run()
    {
        DB::table('user_profiles')->insert([
            'user_id' => 1,
            'Nama' => 'muh ilham',
            'noTelp' => '0856123123', 
            'alamat' => 'jln.rakamin', 
            'ttl' => '12-10-2003',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
