<?php

namespace App\Http\Livewire\Admin;

use App\Models\Model;
use App\Models\Page;
use App\Models\Resource;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use SplFileInfo;

class Sliders extends Component
{
    use WithFileUploads;

    public $files = [];
    public $slider;

    public function mount()
    {
        $this->slider = Page::where('section', 'slider')->where('name', 'index')->first();
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
            'files.*' => 'mimes:mp4,mov,ogg,avi,png,svg,jpg,jpeg',
        ]);

        $slider = $this->slider;
        if (!isset($slider)) {
            $slider = Page::create([
                'name' => 'index',
                'section' => 'slider',
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
        $this->slider = Page::find($slider->id);
    }

    public function delete(Resource $resource)
    {
        Storage::delete($resource->url);
        $resource->delete();
        $this->slider = Page::find($this->slider->id);
    }

    public function render()
    {
        return view('livewire.admin.sliders');
    }
}
