<?php

namespace App\Http\Livewire\Admin\Developments\Almada;

use App\Models\Development;
use Livewire\Component;


class Models extends Component
{
    public $development;
    public $models;
    protected $listeners = ['render'];

    public function mount(Development $development)
    {
        $this->models = $development->models;
    }

    public function render()
    {
        return view('livewire.admin.developments.almada.models');
    }
}
