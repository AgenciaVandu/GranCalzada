<?php

namespace App\Http\Livewire\Admin\Configurations;

use App\Models\Video as ModelsVideo;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Video extends Component
{
    use WithFileUploads;

    public $video_index, $index;

    public function mount()
    {
        $this->video_index = ModelsVideo::where('section', 'index')->get();
    }

    public function saveVideoIndex()
    {
        $this->validate([
            'index' => 'mimes:mp4,mov,avi,ogg',
        ]);
        $video = $this->index->store('resources');

        if ($this->video_index->first()) {
            Storage::delete($this->video_index->first()->url);
            $this->video_index->first()->update([
                'url' =>  $video,
            ]);
        } else {
            ModelsVideo::create([
                'url' =>  $video,
                'section' => 'index'
            ]);
        }
    }

    public function render()
    {
        return view('livewire.admin.configurations.video');
    }
}
