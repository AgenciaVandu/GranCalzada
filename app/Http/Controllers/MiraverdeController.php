<?php

namespace App\Http\Controllers;

use App\Models\Development;
use App\Models\Model;
use App\Models\Video;
use Illuminate\Http\Request;

class MiraverdeController extends Controller
{
    public function index()
    {
        $miraverde = Development::find(2);
        $header = $miraverde->sliders->where('section', 'header')->first();
        $body = $miraverde->sliders->where('section', 'body')->first();
        $button = $miraverde->button;
        $video_body = Video::where('section', 'miraverde_body')->first();
        $lots = $miraverde->lots;
        return view('desarrollos.miraverde', compact('miraverde', 'header', 'body', 'button', 'video_body', 'lots'));
    }

    public function model(Model $model)
    {
        $miraverde = Development::find(2);
        switch ($model->id) {
            case '6':
                $slider = $model->sliders->first();
                $features = $model->features;
                return view('desarrollos.modelos-miraverde.almendro', compact('miraverde', 'model', 'slider', 'features'));
                break;
            case '7':
                $slider = $model->sliders->first();
                $features = $model->features;
                return view('desarrollos.modelos-miraverde.flamboyan-plus', compact('miraverde', 'model', 'slider', 'features'));
                break;
            case '8':
                $slider = $model->sliders->first();
                $features = $model->features;
                return view('desarrollos.modelos-miraverde.bugambilia-plus', compact('miraverde', 'model', 'slider', 'features'));
                break;
            case '9':
                $slider = $model->sliders->first();
                $features = $model->features;
                return view('desarrollos.modelos-miraverde.ceiba-plus', compact('miraverde', 'model', 'slider', 'features'));
                break;
            case '10':
                $slider = $model->sliders->first();
                $features = $model->features;
                return view('desarrollos.modelos-miraverde.violeta-plus', compact('miraverde', 'model', 'slider', 'features'));
                break;
        }
    }

    public function lead(Model $model)
    {
        switch ($model->id) {
            case '6':
                $features = $model->features;
                return view('desarrollos.modelos-miraverde.conversion.lead-almendro', compact('model', 'features'));
                break;
            case '7':
                $features = $model->features;
                return view('desarrollos.modelos-miraverde.conversion.lead-flamboyan', compact('model', 'features'));
                break;
            case '8':
                $features = $model->features;
                return view('desarrollos.modelos-miraverde.conversion.lead-bugambilia-plus', compact('model', 'features'));
                break;
            case '9':
                $features = $model->features;
                return view('desarrollos.modelos-miraverde.conversion.lead-bugambilia-plus', compact('model', 'features'));
                break;
            case '10':
                $features = $model->features;
                return view('desarrollos.modelos-miraverde.conversion.lead-violeta-plus', compact('model', 'features'));
                break;
        }
    }
}
