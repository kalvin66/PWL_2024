<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Selamat Datang';
    }
    public function about()
    {
        return 'Nim 2341728010 <br> Nama: Kalvin Sebastian T';
    }
    public function article($id)
    {
        return 'halaman artikel Dengan Id' . $id;
    }
}
