<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index()
    {
        $video_index = Video::where('section', '=', 'index')->get();

        return view('index', compact('video_index'));
    }

    public function grancalzada()
    {
        return view('gran-calzada');
    }
}
