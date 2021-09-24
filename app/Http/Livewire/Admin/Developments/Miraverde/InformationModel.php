<?php

namespace App\Http\Livewire\Admin\Developments\Miraverde;

use App\Models\Model;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class InformationModel extends Component
{
    use WithFileUploads;
    public $model;
    public $name, $price;
    public $file;
    public $virtual;
    public $virtual_visible = false;
    public $price_visible = false;

    public function mount(Model $model)
    {
        $this->model = $model;
        $this->name = $model->name;
        $this->price = $model->price;
        $this->virtual = $model->virtual;
        $this->price_visible = $model->price_visible;
    }

    public function updatedfile()
    {
        $this->validate([
            'file.*' => 'mimes:png,svg,jpg,jpeg',
        ]);
    }

    public function update($model)
    {
        $model = Model::find($model);
        if (!empty($this->file)) {
            Storage::delete($model->image);
            $url = $this->file->store('resources');
            $model->update([
                'name' => $this->name,
                'price' => $this->price,
                'image' => $url,
            ]);
            if ($model->image != null) {
                $model->image()->update([
                    'url' => $url,
                    'type' => 'image',
                    'resourable_id' => $model->id,
                    'resourable_type' => 'App\Models\Model',
                ]);
            } else {
                $model->image()->create([
                    'url' => $url,
                    'type' => 'image',
                    'resourable_id' => $model->id,
                    'resourable_type' => 'App\Models\Model',

                ]);
            }
        } else {
            $model->update([
                'name' => $this->name,
                'price' => $this->price,
                'virtual' => $this->virtual
            ]);
        }

        $this->reset(['file']);
        $this->emit('render');
        $this->model = Model::find($model->id);
    }

    public function setVisible()
    {
        $this->model->update([
            'virtual_visible' => $this->virtual_visible,
            'price_visible' => $this->price_visible,
        ]);
    }

    public function render()
    {
        return view('livewire.admin.developments.miraverde.information-model');
    }
}
