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
        return view('pegawai.barang', ['table_barang'=>$table_barang], ['table_barang1'=>$table_barang1]);
    }

    public function insert(){
        $table_jenis_barang = jenisBarang::all();
        return view('pegawai.insert-barang', ['table_jenis_barang'=>$table_jenis_barang]);
    }

    public function create(Request $request){
        $data = $request->input();//insert into

		$barang = new Barang;// table

        //value
        $barang->nama_barang         = $data['nama_barang'];
        $barang->strok_barang        = $data['strok_barang'];
        $barang->harga_beli_barang   = $data['harga_beli_barang'];
        $barang->harga_jual_barang   = $data['harga_jual_barang'];
        $barang->id_jb               = $data['id_jb'];
		$barang->save();
    }

    public function edit(Request $request){
        $a = jenisBarang::all();
        return view('pegawai.edit-barang', ['a'=>$a],['request'=>$request]);
    }

    public function update(Request $request,$id){
        $item = Barang::find($id);

        $item->nama_barang           = $request->input('nama_barang');
        $item->stock_barang          = $request->input('strok_barang');
        $item->harga_beli_barang     = $request->input('harga_beli_barang');
        $item->harga_jual_barang     = $request->input('harga_jual_barang');
        $item->id_jb                 = $request->input('id_jb');
        $item->save();

        return redirect('pegawai.barang');
    }

}

