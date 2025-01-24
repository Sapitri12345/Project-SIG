<?php

namespace App\Http\Controllers;

use App\Models\Kematian;
use Illuminate\Http\Request;

class KematianController extends Controller
{
    public function index()
    {
        $list_kematian = Kematian::all();
        return view('kematian.index', compact('list_kematian'));
    }
}
