<?php

namespace App\Http\Controllers;

use App\Models\Development;
use App\Models\Slider;
use App\Models\Video;
use Illuminate\Http\Request;

class AlmadaController extends Controller
{
    public function index()
    {
        $almada = Development::find(1);
        $header = $almada->sliders->where('section', 'header')->first();
        $body = $almada->sliders->where('section', 'body')->first();
        $button = $almada->button;
        $video_body = Video::where('section', 'almada_body')->first();
        return view('desarrollos.almada', compact('almada', 'header', 'body', 'button', 'video_body'));
    }
}
