<?php

namespace App\Http\Controllers;

use App\Models\JenisBarang;
use Illuminate\Http\Request;

class JenisBarangController extends Controller
{
    public function index(){
        $a = jenisBarang::all();
        return view('jenis-barang', ['a'=>$a]);
    }

    public function insert(){
        return view('insert-jenis-barang');
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
