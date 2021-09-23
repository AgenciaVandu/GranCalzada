<?php

namespace App\Http\Controllers;

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

        return view('index', compact('video', 'slider', 'modal'));
    }

    public function grancalzada()
    {
        return view('gran-calzada');
    }
}
