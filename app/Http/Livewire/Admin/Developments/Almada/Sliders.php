<?php

namespace App\Http\Livewire\Admin\Developments\Almada;

use App\Models\Resource;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use SplFileInfo;

class Sliders extends Component
{
    use WithFileUploads;

    public $files_1 = [];
    public $files_2 = [];
    public $count = 0;

    public function render()
    {
        $header = Slider::where('section', 'header')->first();
        $body = Slider::where('section', 'body')->first();
        return view('livewire.admin.developments.almada.sliders', compact('header','body'));
    }


    public function updatedFiles()
    {
        $this->validate([
            'files.*' => 'mimes:mp4,mov,ogg,avi,png,svg,jpg,jpeg',
        ]);
    }
    public function uploadHeaderSlider()
    {
        $this->validate([
            'files_1.*' => 'mimes:mp4,mov,ogg,avi,png,svg,jpg,jpeg',
        ]);

        $almada = Slider::find(1);
        foreach ($this->files_1 as $file) {
            $url = $file->store('resources');
            $name = new SplFileInfo($url);
            $extension = $name->getExtension();
            if ($extension == 'mp4' || $extension == 'mov' || $extension == 'ogg' || $extension == 'avi') {
                $almada->resources()->create([
                    'url' => $url,
                    'type' => 'video'
                ]);
            } else {
                $almada->resources()->create([
                    'url' => $url,
                    'type' => 'image'
                ]);
            }
        }
        $this->reset(['files_1', 'count']);
    }

    public function uploadBodySlider()
    {
        $this->validate([
            'files_2.*' => 'mimes:mp4,mov,ogg,avi,png,svg,jpg,jpeg',
        ]);

        $almada = Slider::find(2);
        foreach ($this->files_2 as $file) {
            $url = $file->store('resources');
            $name = new SplFileInfo($url);
            $extension = $name->getExtension();
            if ($extension == 'mp4' || $extension == 'mov' || $extension == 'ogg' || $extension == 'avi') {
                $almada->resources()->create([
                    'url' => $url,
                    'type' => 'video'
                ]);
            } else {
                $almada->resources()->create([
                    'url' => $url,
                    'type' => 'image'
                ]);
            }
        }
        $this->reset(['files_2', 'count']);
    }

    public function delete(Resource $resource)
    {
        Storage::delete($resource->url);
        $resource->delete();
    }
}
