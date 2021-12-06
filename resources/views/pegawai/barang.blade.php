@extends('layouts.main')

@section('container-fluid')
<h1>Pencatatan Input Barang</h1>
<a href="{{ url('/insert-barang') }}"><button class="btn btn-primary btn-sm" style="float: left">Input Barang</button></a><br><br>
<a href="{{ url('/insert-jenis-barang') }}"><button class="btn btn-primary btn-sm" style="float: left">Input Jenis Barang</button></a><br><br>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama Barang</th>
                        <th>Stok</th>
                        <th>Harga Beli</th>
                        <th>Harga Jual</th>
                        <th>Edit</th>
                        <th>Delete</th>
                </thead>
                <tbody>
                    @foreach($table_barang as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama_barang }}</td>
                            <td>{{ $item->strok_barang }}</td>
                            <td>{{ $item->harga_beli_barang }}</td>
                            <td>{{ $item->harga_jual_barang }}</td>
                            <td>
                            <form action="{{ url('/edit-barang') }}" method="get">
                                <input hidden value="{{ $item->id }}" name="id">
                                <input hidden value="{{ $item->nama_bar }}" name="nama_barang">
                                <input hidden value="{{ $item->stock_barang }}" name="strok_barang">
                                <input hidden value="{{ $item->harga_beli_bar }}" name="harga_beli_barang">
                                <input hidden value="{{ $item->harga_jual_bar }}" name="harga_jual_barang">
                                <button type="submit" class="btn btn-info btn-sm")>edit</button>
                            </form>
                            </td>
                            @csrf
                            @method('Delete')
                            <td>
                                <a><button type="submit" class="btn btn-danger btn-sm" onclick=>Delete</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
