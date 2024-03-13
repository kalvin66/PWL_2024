<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['kategori_id' => '001', 'kategori_kode' => 'MK001', 'kategori_nama' => 'Nasi Goreng'],
            ['kategori_id' => '002', 'kategori_kode' => 'MK002', 'kategori_nama' => 'Mie Goreng'],
            ['kategori_id' => '003', 'kategori_kode' => 'MK003', 'kategori_nama' => 'Sate Ayam'],
            ['kategori_id' => '004', 'kategori_kode' => 'MK004', 'kategori_nama' => 'Gado-Gado'],
            ['kategori_id' => '005', 'kategori_kode' => 'MK005', 'kategori_nama' => 'Soto Ayam'],
        ];
        
        DB::table('m_kategori')->insert($data);
    }
}
