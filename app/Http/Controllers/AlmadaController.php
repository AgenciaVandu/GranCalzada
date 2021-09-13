<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class AlmadaController extends Controller
{
    public function index()
    {
        $slider = Slider::where('section', '=', 'almada')->first();
        return view('desarrollos.almada', compact('slider'));
    }
}
