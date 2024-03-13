<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['barang_id' => 1, 'kategori_id' => '001', 'barang_kode' => '001', 'barang' => 'Nasi ayam', 'harga_beli' => 55000, 'harga_jual' => 65410],
            ['barang_id' => 2, 'kategori_id' => '001', 'barang_kode' => '002', 'barang' => 'nasi briyani', 'harga_beli' => 55000, 'harga_jual' => 12310],
            ['barang_id' => 3, 'kategori_id' => '001', 'barang_kode' => '003', 'barang' => 'sate kambing', 'harga_beli' => 55000, 'harga_jual' => 99610],
            ['barang_id' => 4, 'kategori_id' => '002', 'barang_kode' => '004', 'barang' => 'lontong saur', 'harga_beli' => 55000, 'harga_jual' => 78810],
            ['barang_id' => 5, 'kategori_id' => '002', 'barang_kode' => '005', 'barang' => 'bubur ayam', 'harga_beli' => 55000, 'harga_jual' => 66410],
        ];

        DB::table('m_barang')->insert($data);
    }
}
