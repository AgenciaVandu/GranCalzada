<?php

namespace App\Http\Livewire\Admin\Developments\Almada;

use App\Models\Model;
use Livewire\Component;

class InformationModel extends Component
{

    public $model;
    public $name, $price;
    public function mount(Model $model)
    {
        $this->name = $model->name;
        $this->price = $model->price;
    }

    public function update(Model $model)
    {
        $model->update([
            'name' => $this->name,
            'price' => $this->price
        ]);
        $this->emit('render');

        $this->model = Model::find($model->id);
    }

    public function render()
    {
        return view('livewire.admin.developments.almada.information-model');
    }
}
