<?php

namespace App\Http\Livewire\Admin\Albumes;

use App\Models\Galery;
use App\Models\Resource;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use SplFileInfo;

class Galeries extends Component
{
    use WithFileUploads;

    public $create = false;
    public $add = false;
    public $name;
    public $image;
    public $files = [];
    public $galery;
    public $edit = false;

    protected $rules = ['files.*' => 'required|image|mimes:jpg,jpeg,png,svg,gif',];

    public function updatedFiles()
    {
        $this->validate([
            'files.*' => 'required|image|mimes:jpg,jpeg,png,svg,gif',
        ]);
    }

    public function setBoolean()
    {
        $this->add = false;
        $this->create = false;
        $this->edit = false;
    }

    public function storeGalery()
    {
        $url = $this->image->store('resources');
        Galery::create([
            'name' => $this->name,
            'image' => $url
        ]);

        $this->create = false;
        $this->add = false;
    }

    public function addItems($galery)
    {
        $galery = Galery::find($galery);
        $this->add = true;
        $this->galery = Galery::find($galery->id);
    }

    public function edit($galery)
    {
        $galery = Galery::find($galery);
        $this->edit = true;
        $this->galery = $galery;
        $this->name = $galery->name;
    }
    public function updateGalery()
    {
        if (!empty($this->image)) {
            $url = $this->image->store('resources');
            $this->galery->update([
                'name' => $this->name,
                'image' => $url
            ]);
        } else {
            $this->galery->update([
                'name' => $this->name,
            ]);
        }

        $this->create = false;
        $this->add = false;
    }

    public function uploadPhotos($galery)
    {
        $this->validate();

        $galery = Galery::find($galery);
        foreach ($this->files as $file) {
            $url = $file->store('resources');
            $name = new SplFileInfo($url);
            $extension = $name->getExtension();
            if ($extension == 'mp4' || $extension == 'mov' || $extension == 'ogg' || $extension == 'avi') {
                $galery->resources()->create([
                    'url' => $url,
                    'type' => 'video'
                ]);
            } else {
                $galery->resources()->create([
                    'url' => $url,
                    'type' => 'image'
                ]);
            }
        }
        $this->reset(['files']);
        $this->galery = Galery::find($galery->id);
    }

    public function delete(Resource $resource)
    {
        Storage::delete($resource->url);
        $resource->delete();
        $this->galery = Galery::find($this->galery->id);
    }

    public function render()
    {
        return view('livewire.admin.albumes.galeries', [
            'galeries' => Galery::orderBy('id', 'desc')->get(),
        ]);
    }
}
