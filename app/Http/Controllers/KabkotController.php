<?php

namespace App\Http\Controllers;

use App\Models\Kabkota;
use Illuminate\Http\Request;

class KabkotController extends Controller
{
    public function index()
    {
        $list_kab = Kabkota::all();
        return view('kabkot.index', [
            'judul'=> 'Data Kabupaten/Kota',
            'list_kabkota' => $list_kab,
        ]);
    }

    private function getGeoJsonProvinsi() {
        $list_kab = Kabkota::all();
        return response()->json($list_kab);
    }
}
