@extends('layouts.main')

@section('container-fluid')
<h1 class="h3 mb-2 text-gray-800">Pemesanan Barang</h1>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <a href="/pemesanan-create" class="btn btn-success"> + &nbspPesan</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Kode</th>
                            <th>Pemesan</th>
                            <th>Supplier</th>
                            <th>Tanggal</th>
                            <th>Status</th>
                            <th style="width: 1%;">Detail</th>
                            <th style="width: 1%;">Edit</th>
                            <th style="width: 1%;">Hapus</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pemesanan as $data=>$v)
                            <tr>
                                <td>{{ $v->id }}</td>
                                <td>{{ $v->User->name }}</td>
                                <td>{{ $v->Supplier->nama_sup }}</td>
                                <td>{{ $v->tgl_pesan }}</td>
                                <td>{{ $v->status_pesan }}</td>
                                <td class="text-wrap"><a href="/detailpemesanan-index/{{ $v->id }}" class="btn btn-warning">Show</a></td>
                                <td class="text-wrap"><a href="/pemesanan-edit/{{ $v->id }}" class="btn btn-primary">Edit</a></td>
                                <td class="text-wrap"><a href="/pemesanan-destroy/{{ $v->id }}" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin ?')">Hapus</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
