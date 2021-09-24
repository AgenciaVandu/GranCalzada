<?php

namespace App\Http\Livewire\Admin;

use App\Models\Page;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Modal extends Component
{
    use WithFileUploads;
    public $modal;
    public $file;
    public $rules = ['file' => 'required'];

    public function mount()
    {
        $this->modal = Page::where('section', 'modal')->where('name', 'index')->first();
    }

    public function updatedfile()
    {
        $this->validate([
            'file.*' => 'mimes:png,svg,jpg,jpeg',
        ]);
    }


    public function update()
    {
        $this->validate([
            'file' => 'required|mimes:png,svg,jpg,jpeg',
        ]);

        $image = $this->file->store('resources');

        if (!$this->modal) {
            $this->modal = Page::create([
                'name' => 'index',
                'section' => 'modal'
            ]);
        }

        if ($this->modal->resources->first()) {
            Storage::delete($this->modal->resources->first()->url);
            $this->modal->resources()->update([
                'url' => $image,
                'type' => 'image'
            ]);
        } else {
            $this->modal->resources()->create([
                'url' => $image,
                'type' => 'image'
            ]);
        }
        $this->reset('file');

        $this->modal = Page::find($this->modal->id);
    }

    public function render()
    {
        return view('livewire.admin.modal');
    }
}
