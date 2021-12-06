<?php

use App\Http\Controllers\RegisterController;
use App\Models\Barang;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KotaController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\JenisBarangController;
use App\Http\Controllers\UkuranController;
use App\Http\Controllers\WarnaController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TabelUserController;
use App\Http\Controllers\PemesananController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login','App\Http\Controllers\HomeController@Login');


Route::get('/data', function () {
    return view('pegawai.data', [
        "title"=> "Data"
    ]);
});



Route::get('/penerimaan', function () {
    return view('pegawai.terima', [
        "title"=>"Penerimaan"
    ]);
});

Route::get('/pembayaran', function () {
    return view('pegawai.bayar',[
        "title"=>"Pembayaran"
    ]);
});

Route::get('/login', function () {
    return view('login',[
        "title"=>"Login"
    ]);
});

Route::get('/navbar', function () {
    return view("partials.navbar",[
        "title"=>"Barang"
    ]);
});

Route::get('/', function () {
    return view('home',[
        "title"=>"Welcome"
    ]);
});

Route::get('/home', function () {
    return view('home',[
        "title"=>"Welcome"
    ]);
});

Route::get('/owner', function () {
    return view('pemilik.dashboard',[
        "title"=>"Owner"
    ]);
});

Route::get('/pegawai', function () {
    return view('pegawai.pegawai',[
        "title"=>"Pegawai"
    ]);
});

Route::get('/tables', function () {
    return view('pegawai.tabel',[
        "title"=>"Tabel"
    ]);
});

Route::get('/pemilik', function () {
    return view('pemilik.dashboard',[
        "title"=>"Owner"
    ]);
});



Route::get('/kota', [KotaController::class, 'index']);
Route::get('/kota-create', [KotaController::class, 'create']);
Route::post('/kota-store', [KotaController::class, 'store']);
Route::get('/kota-edit/{id}', [KotaController::class,'edit']);
Route::post('/kota-update/{id}', [KotaController::class,'update']);
Route::get('/kota-destroy/{id}', [KotaController::class,'destroy']);

Route::get('/insert-jenis-barang', 'App\Http\Controllers\JenisBarangController@insert');
Route::post('/create-jenis-barang','App\Http\Controllers\JenisBarangController@create');

Route::get('/role', 'App\Http\Controllers\RoleController@index');
Route::get('/role-create', 'App\Http\Controllers\RoleController@create');
Route::post('/role-store', 'App\Http\Controllers\RoleController@store');
Route::get('/role-edit/{id}','App\Http\Controllers\RoleController@edit');
Route::post('/role-update/{id}','App\Http\Controllers\RoleController@update');
Route::get('/role-destroy/{id}','App\Http\Controllers\RoleController@destroy');

Route::get('/register', 'App\Http\Controllers\RegisterController@index');
Route::post('/register', 'App\Http\Controllers\RegisterController@store');

Route::get('/user', [TabelUserController::class, 'index']);
Route::get('/user-create', [TabelUserController::class, 'create']);
Route::post('/user-store', [TabelUserController::class, 'store']);
Route::get('/user-edit/{id}', [TabelUserController::class,'edit']);
Route::post('/user-update/{id}', [TabelUserController::class,'update']);
Route::get('/user-destroy/{id}', [TabelUserController::class,'destroy']);

Route::post('/create-barang','App\Http\Controllers\BarangController@create');
Route::get ('/barang','App\Http\Controllers\BarangController@index');
Route::get ('/insert-barang','App\Http\Controllers\BarangController@insert');
Route::get('/edit-barang','App\Http\Controllers\BarangController@edit');
Route::post('/update-barang/{id}','App\Http\Controllers\BarangController@update');

