<link href="css/styles.css" rel="stylesheet" />
@extends('layouts.main')
@section("container-fluid")
<h1>Daftar Tabel</h1>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <tr>
          <th>Tabel</th>
          <th>Akses</th>
        </tr>
<!-- Tabel Kota-->
        <tr>
            <td>Kota</td>
            <td><button class="button" id="signUp"><a href="/tabel-kota">Kota</a></button></td>
        </tr>
<!-- Tabel ...-->
        <tr>
            <td></td>
            <td></td>
        </tr>
      </table>


@endsection
