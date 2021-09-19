<?php

namespace App\Http\Controllers;

use App\Models\Development;
use App\Models\Model;
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

    public function model(Model $model)
    {
        switch ($model->id) {
            case '1':
                $slider = $model->sliders->first();
                $features = $model->features;
                return view('desarrollos.modelos-almada.aguamarina', compact('model', 'slider', 'features'));
                break;
            case '2':
                return view('desarrollos.modelos-almada.magenta', compact('model'));
                break;
            case '3':
                return view('desarrollos.modelos-almada.ambar', compact('model'));
                break;
            case '4':
                return view('desarrollos.modelos-almada.violeta', compact('model'));
                break;
            case '5':
                return view('desarrollos.modelos-almada.violeta-plus', compact('model'));
                break;
        }
    }
}
