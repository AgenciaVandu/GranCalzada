<?php

namespace App\Http\Livewire\Admin\Developments\Almada;

use Livewire\Component;

class Description extends Component
{
    public $dev_almada, $description;

    public function mount()
    {
        $this->description = $this->dev_almada->description;
    }
    public function render()
    {

        return view('livewire.admin.developments.almada.description');
    }

    public function updateDescription()
    {
        $this->dev_almada->update([
            'description' => $this->description
        ]);
    }
}
