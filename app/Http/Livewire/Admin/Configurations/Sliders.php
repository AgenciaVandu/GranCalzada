<?php

namespace App\Http\Livewire\Admin\Configurations;

use App\Models\Resource;
use App\Models\Slider;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use SplFileInfo;

class Sliders extends Component
{
    use WithFileUploads;

    public $files = [];
    public $count = 0;
    public function render()
    {
        $almada = Slider::where('section', 'almada')->first();
        $miraverde = Slider::where('section', 'miraverde')->first();
        return view('livewire.admin.configurations.sliders', compact('almada', 'miraverde'));
    }


    public function updatedFiles()
    {
        $this->validate([
            'files.*' => 'mimes:mp4,mov,ogg,avi,png,svg,jpg,jpeg',
        ]);
    }
    public function uploadAlmada()
    {
        $this->validate([
            'files.*' => 'mimes:mp4,mov,ogg,avi,png,svg,jpg,jpeg',
        ]);

        $almada = Slider::find(1);
        foreach ($this->files as $file) {
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
        $this->reset(['files', 'count']);
    }

    public function deleteAlmada(Resource $resource)
    {
        Storage::delete($resource->url);
        $resource->delete();
    }
}
