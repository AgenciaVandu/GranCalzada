<?php

namespace App\Http\Livewire\Admin\Developments\Almada;

use App\Models\Feature;
use App\Models\Model;
use Livewire\Component;

class Features extends Component
{
    public $model;
    public $feature;
    public $edit;
    public $name;
    public $name2;

    protected $rules = [
        'feature.name' => 'required'
    ];

    public function mount(Model $model)
    {
        $this->model = $model;
        $this->feature  = new Feature();
    }

    public function store($model)
    {
        $model = Model::find($model);

        Feature::create([
            'name' => $this->name,
            'floor' => 'down',
            'model_id' => $model->id
        ]);

        $this->model = Model::find($model->id);

        $this->reset(['name']);
    }

    public function store2($model)
    {
        $model = Model::find($model);

        Feature::create([
            'name' => $this->name2,
            'floor' => 'top',
            'model_id' => $model->id
        ]);

        $this->model = Model::find($model->id);

        $this->reset(['name2']);
    }

    public function edit(Feature $feature)
    {
        $this->resetValidation();
        $this->feature = $feature;
    }

    public function update(Feature $feature)
    {
        $feature->update([
            'name' => $this->feature->name
        ]);

        $this->feature = new Feature();
        $this->model = Model::find($this->model->id);
    }

    public function delete(Feature $feature)
    {
        $feature->delete();
        $this->model = Model::find($this->model->id);
    }

    public function render()
    {
        return view('livewire.admin.developments.almada.features');
    }
}
