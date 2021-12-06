<?php

namespace App\Http\Controllers;

use App\Models\JenisBarang;
use Illuminate\Http\Request;

class JenisBarangController extends Controller
{
    public function index(){
        $a = jenisBarang::all();
        return view('pegawai.jenis-barang', ['a'=>$a]);
    }

    public function insert(){
        return view('pegawai.insert-jenis-barang');
    }

    public function create(Request $request)
    {
        $data = $request->input();
        $barang = new jenisBarang;
        $barang->jenis_barang   = $data['jenis_barang'];
        $barang->save();

        return redirect('insert-jenis-barang');
    }
}
