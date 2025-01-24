<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provinsi;

class BerandaController extends Controller
{
    public function index()
    {
        $list_prov = Provinsi::all();
        return view('beranda.index', [
            'judul'=> 'Data Provinsi',
            'list_provinsi' => $list_prov,
        ]);
    }

    private function getGeoJsonProvinsi() {
        $list_prov = Provinsi::all();
        return response()->json($list_prov);
    }
}
