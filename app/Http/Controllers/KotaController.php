<?php

namespace App\Http\Controllers;
use App\Models\Kota;
use Illuminate\Http\Request;

class KotaController extends Controller
{
    public function index() {
        $kota = Kota::all();
    }
}
