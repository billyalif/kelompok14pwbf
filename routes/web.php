<?php

use App\Models\Barang;
use Illuminate\Support\Facades\Route;


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
    return view('data', [
        "title"=> "Data"
    ]);
});

Route::get('/order', 'App\Http\Controllers\KotaController@index');

Route::get('/penerimaan', function () {
    return view('terima', [
        "title"=>"Penerimaan"
    ]);
});

Route::get('/pembayaran', function () {
    return view('bayar',[
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

Route::get('/home', function () {
    return view('home',[
        "title"=>"Welcome"
    ]);
});


