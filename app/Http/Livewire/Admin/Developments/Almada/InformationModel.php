<?php

namespace App\Http\Livewire\Admin\Developments\Almada;

use App\Models\Model;
use App\Models\Resource;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class InformationModel extends Component
{
    use WithFileUploads;
    public $model;
    public $name, $price;
    public $file;
    public $slider;

    public function mount(Model $model)
    {
        $this->name = $model->name;
        $this->price = $model->price;
        $this->slider = $model->resources;
    }

    public function updatedfile()
    {
        $this->validate([
            'file.*' => 'mimes:png,svg,jpg,jpeg',
        ]);
    }

    public function update(Model $model)
    {
        $model->update([
            'name' => $this->name,
            'price' => $this->price
        ]);

        $url = $this->file->store('resources');

        if ($model->resources) {
            Storage::delete($model->resources->first()->url);
        } else {
            Resource::create([
                'url' => $url,
                'type' => 'image',
                'resourable_id' => $this->model->id,
                'resourable_type' => 'App\Models\Model',
            ]);
        }

        $this->model = Model::find($model->id);
        $this->emit('render');
    }

    public function render()
    {
        return view('livewire.admin.developments.almada.information-model');
    }
}
