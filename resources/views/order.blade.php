@extends('home')

@section("container-fluid")
<h1>Pencatatan Pemesanan Barang</h1>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Kota</th>
                </thead>
                <tbody>
                    @foreach ($a as $dataKota)
                    <tr>
                        <td>{{ $dataKota -> id }}</td>
                        <td>{{ $dataKota -> nama_kota }}</td>
                    </tr>
                    @endforeach



                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
