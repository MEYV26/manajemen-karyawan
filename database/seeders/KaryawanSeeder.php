<?php

namespace Database\Seeders;
use App\Models\Karyawan;
use Illuminate\Database\Seeder;

class KaryawanSeeder extends Seeder
{
    public function run(): void
    {
        Karyawan::create([
            'nama_lengkap' => 'Budi Santoso',
            'email' => 'budi.s@example.com',
            'posisi' => 'Frontend Developer',
            'tanggal_masuk' => '2023-01-15',
            'gaji' => 8500000
        ]);

        Karyawan::create([
            'nama_lengkap' => 'Citra Lestari',
            'email' => 'citra.l@example.com',
            'posisi' => 'Backend Developer',
            'tanggal_masuk' => '2022-11-20',
            'gaji' => 9500000
        ]);
    }
}