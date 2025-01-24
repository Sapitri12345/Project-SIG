<?php

namespace App\Http\Controllers;

use App\Models\Pendapatan;
use Illuminate\Http\Request;

class PendapatanController extends Controller
{
    public function index()
    {
        $list_pendapatan = Pendapatan::all();
        return view('pendapatan.index', compact('list_pendapatan'));
    }
}
