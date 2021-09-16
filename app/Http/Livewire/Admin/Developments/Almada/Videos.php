<?php

namespace App\Http\Livewire\Admin\Developments\Almada;

use App\Models\Resource;
use App\Models\Video;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use SplFileInfo;

class Videos extends Component
{
    use WithFileUploads;
    public $file;
    public $video;
    public $visible;

    public function mount()
    {
        $this->video = Video::where('section', 'almada_body')->first();
        $this->visible = $this->video->visible;
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
        $video = $this->file->store('resources');

        if ($this->video) {
            Storage::delete($this->video->first()->url);
            $this->video->resources()->update([
                'url' =>  $video,
                'type' => 'video'
            ]);
        } else {
            $newVideo = Video::create([
                'section' => 'almada_body'
            ]);
            $newVideo->resources()->create([
                'url' => $video,
                'type' => 'video'
            ]);
        }
        $this->reset(['file']);
        $this->video = Video::where('section', 'almada_body')->first();
    }

    public function setVisible()
    {
        $this->video->update([
            'visible' => $this->visible
        ]);
    }

    public function render()
    {
        return view('livewire.admin.developments.almada.videos');
    }
}
