<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function insertData()
    {
        // $data = [
        //     'kategori_kode' => 'MK006',
        //     'kategori_nama' => 'Mie Rebus',
        //     'created_at' => now()
        // ];
        // DB::table('m_kategori')->insert($data);
        // return 'Insert data berhasil';

        // $row = DB::update('update m_kategori set kategori_nama = ? where kategori_kode = ?', ['Terang Bulan', 'MK006']);
        // return 'Update Data Berhasil. Jumlah Dta Yang DiUpdate: ' . $row.' baris';

        // $row = DB::delete('delete from m_kategori where kategori_kode = ?', ['MK006']);
        // return 'Delete Data Berhasil. Jumlah Dta Yang DiDelete: ' . $row.' baris';

        $data = DB::select('select * from m_kategori');
        return view('kategori', ['data' => $data]);
    }
}
