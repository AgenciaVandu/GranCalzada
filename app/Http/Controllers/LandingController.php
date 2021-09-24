<?php

namespace App\Http\Controllers;

use App\Models\Development;
use App\Models\Model;
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
        $desde_almada = Model::where('price_visible', 1)->where('development_id', $almada->id)->first();

        $desde_miraverde = Model::where('price_visible', 1)->where('development_id', $miraverde->id)->first();

        return view('index', compact('video', 'slider', 'modal', 'almada', 'miraverde', 'desde_almada', 'desde_miraverde'));
    }

    public function grancalzada()
    {
        $slider = Page::where('name', 'gran_calzada')->where('section', 'header')->first();
        return view('gran-calzada', compact('slider'));
    }
}
