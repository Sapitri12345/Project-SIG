<?php

namespace App\Http\Controllers;

use App\Models\Kemiskinan;
use Illuminate\Http\Request;

class KemiskinanController extends Controller
{
    public function index()
    {
        $list_kemiskinan = Kemiskinan::all();
        return view('kemiskinan.index', compact('list_kemiskinan'));
    }

}
