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
        $lots = $almada->lots;
        return view('desarrollos.almada', compact('almada', 'header', 'body', 'button', 'video_body', 'lots'));
    }

    public function model(Model $model)
    {
        $almada = Development::find(1);
        switch ($model->id) {
            case '1':
                $slider = $model->sliders->first();
                $features = $model->features;
                return view('desarrollos.modelos-almada.aguamarina', compact('almada', 'model', 'slider', 'features'));
                break;
            case '2':
                $slider = $model->sliders->first();
                $features = $model->features;
                return view('desarrollos.modelos-almada.magenta', compact('almada', 'model', 'slider', 'features'));
                break;
            case '3':
                $slider = $model->sliders->first();
                $features = $model->features;
                return view('desarrollos.modelos-almada.ambar', compact('almada', 'model', 'slider', 'features'));
                break;
            case '4':
                $slider = $model->sliders->first();
                $features = $model->features;
                return view('desarrollos.modelos-almada.violeta', compact('almada', 'model', 'slider', 'features'));
                break;
            case '5':
                $slider = $model->sliders->first();
                $features = $model->features;
                return view('desarrollos.modelos-almada.violeta-plus', compact('almada', 'model', 'slider', 'features'));
                break;
        }
    }

    public function lead(Model $model)
    {
        switch ($model->id) {
            case '1':
                $features = $model->features;
                return view('desarrollos.modelos-almada.conversion.lead-aguamarina', compact('model', 'features'));
                break;
            case '2':
                $features = $model->features;
                return view('desarrollos.modelos-almada.conversion.lead-magenta', compact('model', 'features'));
                break;
            case '3':
                $features = $model->features;
                return view('desarrollos.modelos-almada.conversion.lead-ambar', compact('model', 'features'));
                break;
            case '4':
                $features = $model->features;
                return view('desarrollos.modelos-almada.conversion.lead-violeta', compact('model', 'features'));
                break;
            case '5':
                $features = $model->features;
                return view('desarrollos.modelos-almada.conversion.lead-violeta-plus', compact('model', 'features'));
                break;
        }
    }

    public function master()
    {
        $almada = Development::find(1);
        $lots = $almada->lots;
        return view('desarrollos.mastersplan.master-almada', compact('lots'));
    }
}
