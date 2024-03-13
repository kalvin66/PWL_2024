<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'penjualan_id' => 1,
                'user_id' => 2,
                'pembeli' => 'Adi',
                'penjualan_kode' => 'KP1',
                'penjualan_tanggal' => date('Y-m-d', strtotime('05/03/2024')),
            ],
            [
                'penjualan_id' => 2,
                'user_id' => 3,
                'pembeli' => 'Budi',
                'penjualan_kode' => 'KP2',
                'penjualan_tanggal' => date('Y-m-d', strtotime('06/03/2024')),
            ],
            [
                'penjualan_id' => 3,
                'user_id' => 3,
                'pembeli' => 'Cadi',
                'penjualan_kode' => 'KP3',
                'penjualan_tanggal' => date('Y-m-d', strtotime('06/03/2024')),
            ],
            [
                'penjualan_id' => 4,
                'user_id' => 3,
                'pembeli' => 'Dedi',
                'penjualan_kode' => 'KP4',
                'penjualan_tanggal' => date('Y-m-d', strtotime('06/03/2024')),
            ],
            [
                'penjualan_id' => 5,
                'user_id' => 3,
                'pembeli' => 'Edi',
                'penjualan_kode' => 'KP5',
                'penjualan_tanggal' => date('Y-m-d', strtotime('06/03/2024')),
            ],
          
        ];

        DB::table('t_penjualan')->insert($data);
    }
}
