<?php

namespace App\Http\Controllers;
use App\Models\Kota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KotaController extends Controller
{
    public function index() {
        $a = Kota::all();
        return view('order', ['a'=>$a]);
    }
}
