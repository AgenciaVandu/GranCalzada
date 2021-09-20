<?php

namespace App\Http\Livewire\Admin\Developments\Almada;

use App\Models\Development;
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
    public $development;
    public $sliders;
    public $header, $body;
    public $listeners = ['render'];

    public function mount(Development $development)
    {
        $this->sliders = $development->sliders;
        $this->header = $this->sliders->where('section', 'header')->first();
        $this->body = $this->sliders->where('section', 'body')->first();
    }

    public function render()
    {
        return view('livewire.admin.developments.almada.sliders');
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

        $header = $this->header;
        foreach ($this->files_1 as $file) {
            $url = $file->store('resources');
            $name = new SplFileInfo($url);
            $extension = $name->getExtension();
            if ($extension == 'mp4' || $extension == 'mov' || $extension == 'ogg' || $extension == 'avi') {
                $header->resources()->create([
                    'url' => $url,
                    'type' => 'video'
                ]);
            } else {
                $header->resources()->create([
                    'url' => $url,
                    'type' => 'image'
                ]);
            }
        }
        $this->reset(['files_1', 'count']);
        $this->header = Slider::find($header->id);
    }

    public function uploadBodySlider()
    {
        $this->validate([
            'files_2.*' => 'mimes:mp4,mov,ogg,avi,png,svg,jpg,jpeg',
        ]);

        $body = $this->body;
        foreach ($this->files_2 as $file) {
            $url = $file->store('resources');
            $name = new SplFileInfo($url);
            $extension = $name->getExtension();
            if ($extension == 'mp4' || $extension == 'mov' || $extension == 'ogg' || $extension == 'avi') {
                $body->resources()->create([
                    'url' => $url,
                    'type' => 'video'
                ]);
            } else {
                $body->resources()->create([
                    'url' => $url,
                    'type' => 'image'
                ]);
            }
        }
        $this->reset(['files_2', 'count']);
        $this->body = Slider::find($body->id);
    }

    public function delete(Resource $resource)
    {
        Storage::delete($resource->url);
        $resource->delete();
        $this->emit('render');
    }
}
