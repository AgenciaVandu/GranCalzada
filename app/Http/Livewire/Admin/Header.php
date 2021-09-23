<?php

namespace App\Http\Livewire\Admin;

use App\Models\Page;
use Livewire\Component;
use Livewire\WithFileUploads;

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

        if (!$this->video) {
            $this->video = Page::create([
                'name' => 'index',
                'section' => 'header'
            ]);
        }

        $header = $this->video;
        $url = $this->file->store('resources');

        if ($header->resources->first()) {
            $header->resources()->update([
                'url' => $url,
                'type' => 'video'
            ]);
        } else {
            $header->resources()->create([
                'url' => $url,
                'type' => 'video'
            ]);
        }
        $this->reset(['file']);

        $this->video = Page::find($header->id);
    }
    public function render()
    {
        return view('livewire.admin.header');
    }
}
