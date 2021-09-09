<?php

namespace App\Http\Livewire\Admin\Configurations;

use Livewire\Component;
use Livewire\WithFileUploads;

class Video extends Component
{
    use WithFileUploads;

    public $video_index;

    public function save()
    {
        $this->validate([
            'video_index' => 'image|max:1024', // 1MB Max
        ]);

        $this->video_index->store('videos');
    }

    public function render()
    {
        return view('livewire.admin.configurations.video');
    }
}
