<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\JenisBarang;
use Illuminate\Http\Request;


class BarangController extends Controller
{
    public function index() {
        $table_barang = Barang::all();
        $table_barang1 = jenisBarang::all();
        return view('order', ['table_barang'=>$table_barang], ['table_barang1'=>$table_barang1]);
    }

    public function insert(){
        $table_jenis_barang = jenisBarang::all();
        return view('insert-order', ['table_jenis_barang'=>$table_jenis_barang]);
    }

    public function create(Request $request){
        $data = $request->input();//insert into

		$barang = new Barang;// table

        //value
        $barang->nama_barang       = $data['nama_barang'];
        $barang->strok_barang   = $data['strok_barang'];
        $barang->harga_beli_barang = $data['harga_beli_barang'];
        $barang->harga_jual_barang = $data['harga_jual_barang'];
        $barang->id_jb          = $data['id_jb'];
		$barang->save();//tombol run sqlyog
    }


}

