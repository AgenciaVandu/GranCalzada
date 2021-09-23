<?php

namespace App\Http\Livewire\Admin;

use App\Models\Page;
use Livewire\Component;
use Livewire\WithFileUploads;
use SplFileInfo;

class Header extends Component
{
    use WithFileUploads;
    public $file;
    public $video;
    public $visible;

    public function mount()
    {
        $this->video = Page::where('section', 'header')->where('name', 'index')->first();
    }

    public function updatedfile()
    {
        $this->validate([
            'file.*' => 'mimes:mp4,mov,ogg,avi',
        ]);
    }


    public function uploadBodyVideo()
    {
        $this->validate([
            'file.*' => 'mimes:mp4,mov,ogg,avi,png,svg,jpg,jpeg',
        ]);

        $header = $this->video;
        $url = $this->file->store('resources');
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
        $this->reset(['file']);
    }
    public function render()
    {
        return view('livewire.admin.header');
    }
}
