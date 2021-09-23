<?php

namespace App\Http\Controllers;

use App\Models\Development;
use App\Models\Page;
use App\Models\Video;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $video = Page::where('name', 'index')->where('section', 'header')->first();
        $slider = Page::where('name', 'index')->where('section', 'slider')->first();
        $modal = Page::where('name', 'index')->where('section', 'modal')->first();
        $almada = Development::find(1);
        $miraverde = Development::find(2);
        $desde_almada = $almada->models()->orderBy('price', 'asc')->get();
        $desde_miraverde = $miraverde->models()->orderBy('price', 'asc')->get();

        return view('index', compact('video', 'slider', 'modal', 'almada', 'miraverde', 'desde_almada', 'desde_miraverde'));
    }

    public function grancalzada()
    {
        return view('gran-calzada');
    }
}
