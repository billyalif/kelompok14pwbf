@extends('layouts.main')
@section('container-fluid')
<div class="container-fluid px-4">
	<h1 class="mt-2 mb-4">Edit Barang</h1>
	<form action = "{{ url('/update-barang/{id}',$request->id) }}" method = "post">
		@csrf
			<div class="content">
				<div class="row mb-3">
				<input type="hidden" class="form-control" name='id' value="{{ $request->id }}"/>
					<label for="inputNamaBarang" class="col-sm-2 col-form-label ">Nama Barang</label>
					<div class="col-sm-4">
					  <input type="text" placeholder="{{ $request->nama_barang }}" value="{{ $request->nama_barang }}" class="form-control" id="inputNamaBarang" name='nama_barang'>
					</div>
				</div>
				<div class="row mb-3">
					<label for="inputJenisBarang" class="col-sm-2 col-form-label">Jenis Barang</label>
					<div class="col-sm-4">
					  	{{-- <input type="text" class="form-control" id="inputJenisBarang"> --}}
						  <select class="form-select form-select-default" name="id_jb" aria-label=".form-select-default">
							@foreach($a as $item)
								<option value="{{ $item->id }}">{{ $item->jenis_barang }}</option>
							@endforeach
						  </select>
					</div>
				</div>
				<div class="row mb-3">
					<label for="inputStokBarang" class="col-sm-2 col-form-label">Stok Barang</label>
					<div class="col-sm-4">
					  <input type="text" placeholder="{{ $request->strok_barang }}" value="{{ $request->strok_barang }}" class="form-control" id="inputStokBarang"  name='strok_barang'>
					</div>
				</div>
				<div class="row mb-3">
					<label for="inputHargaBeli" class="col-sm-2 col-form-label">Harga Beli</label>
					<div class="col-sm-4">
					  <input type="text" placeholder="{{ $request->harga_beli_barang }}" value="{{ $request->harga_beli_barang }}" class="form-control" id="inputHargaBeli"  name='harga_beli_barang'>
					</div>
				</div>
				<div class="row mb-3">
					<label for="inputHargaJual" class="col-sm-2 col-form-label">Harga Jual</label>
					<div class="col-sm-4">
					  <input type="text" placeholder="{{ $request->harga_jual_barang }}" value="{{ $request->harga_jual_barang }}" class="form-control" id="inputHargaJual" name='harga_jual_barang'>
					</div>
				</div>
			</div>

			<input type = 'submit' class="btn btn-primary" value = "Input Data"/>
	</form>
@endsection
