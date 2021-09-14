<?php

namespace App\Http\Controllers;

use App\Models\Development;
use App\Models\Slider;
use Illuminate\Http\Request;

class AlmadaController extends Controller
{
    public function index()
    {
        $almada = Development::find(1);
        $header = $almada->sliders->where('section', 'header')->first();
        $button = $almada->button;
        return view('desarrollos.almada', compact('almada', 'header', 'button'));
    }
}
