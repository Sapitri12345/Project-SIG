<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function index()
    {
        $list_penduduk = Penduduk::all();
        return view('penduduk.index', compact('list_penduduk'));
    }
}
