<?php

namespace App\Http\Controllers;

use App\Models\Galery;
use Illuminate\Http\Request;

class GaleryController extends Controller
{
    public function index()
    {
        $galeries = Galery::orderBy('id', 'desc')->get();
        return view('avances', compact('galeries'));
    }
}
