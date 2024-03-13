<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'barang_id' => 1,
                'harga' => 33210,
                'jumlah' => 4,
            ],
            [
                'penjualan_id' => 2,
                'barang_id' => 2,
                'harga' => 82410,
                'jumlah' => 7,
            ],
            [
                'penjualan_id' => 3,
                'barang_id' => 3,
                'harga' => 99630,
                'jumlah' => 8,
            ],
            [
                'penjualan_id' => 4,
                'barang_id' => 4,
                'harga' => 54120,
                'jumlah' => 6,
            ],
            [
                'penjualan_id' => 5,
                'barang_id' => 5,
                'harga' => 33210,
                'jumlah' => 7,
            ],
        ];

        DB::table('t_penjualan_detail')->insert($data);
    }
}
