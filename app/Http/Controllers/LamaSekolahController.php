<?php

namespace App\Http\Controllers;

use App\Models\LamaSekolah;
use Illuminate\Http\Request;

class LamaSekolahController extends Controller
{
    public function index()
    {
        $list_sekolah = LamaSekolah::all();
        return view('sekolah.index', compact('list_sekolah'));
    }
}
