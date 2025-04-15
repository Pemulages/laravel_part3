<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('user')->insert([
            [
                'nama' => 'Admin Sumber Waras',
                'alamat' => 'Jl. Kesehatan No.1',
                'no_hp' => '08123456789',
                'email' => 'admin@sumberwaras.com',
                'role' => 'admin',
                'password' => Hash::make('password123'),
            ],
            [
                'nama' => 'Dr. Andi Penyiksa Pasien',
                'alamat' => 'Jl. Medis Rajam No.1   ',
                'no_hp' => '0869696969',
                'email' => '    ',
                'role' => 'dokter',
                'password' => Hash::make('password123'),
            ],
            [
                'nama' => 'Budi Pasien Rabies Stadium 4',
                'alamat' => 'Jl. Menuju Jahanam No.3',
                'no_hp' => '08123456789',
                'email' => 'budi@sumberwaras.com',
                'role' => 'pasien',
                'password' => Hash::make('password123'),
            ],
        ]);
    }
}
