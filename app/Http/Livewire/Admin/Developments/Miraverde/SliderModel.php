<?php

namespace App\Http\Livewire\Admin\Developments\Miraverde;

use App\Models\Model;
use App\Models\Resource;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use SplFileInfo;

class SliderModel extends Component
{
    use WithFileUploads;

    public $files = [];
    public $model;
    public $slider;

    public function mount(Model $model)
    {
        $this->model = $model;
        $this->slider = $model->sliders->first();
    }

    public function updatedFiles()
    {
        $this->validate([
            'files.*' => 'mimes:mp4,mov,ogg,avi,png,svg,jpg,jpeg',
        ]);
    }
    public function uploadHeaderSlider($model)
    {
        $model = Model::find($model);
        $this->validate([
            'files.*' => 'mimes:mp4,mov,ogg,avi,png,svg,jpg,jpeg',
        ]);

        $slider = $this->slider;
        if (!isset($slider)) {
            $slider = $model->sliders()->create([
                'section' => 'header'
            ]);
        }
        foreach ($this->files as $file) {
            $url = $file->store('resources');
            $name = new SplFileInfo($url);
            $extension = $name->getExtension();

            if ($extension == 'mp4' || $extension == 'mov' || $extension == 'ogg' || $extension == 'avi') {
                $slider->resources()->create([
                    'url' => $url,
                    'type' => 'video'
                ]);
            } else {

                $slider->resources()->create([
                    'url' => $url,
                    'type' => 'image'
                ]);
            }
        }
        $this->reset(['files']);
        $this->slider = Slider::find($slider->id);
    }

    public function delete(Resource $resource)
    {
        Storage::delete($resource->url);
        $resource->delete();
        $this->slider = Slider::find($this->slider->id);
    }
    public function render()
    {
        return view('livewire.admin.developments.miraverde.slider-model');
    }
}
