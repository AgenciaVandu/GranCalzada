<?php

namespace App\Http\Livewire\Admin\Developments\Almada;

use App\Models\Development;
use Livewire\Component;

class Description extends Component
{
    public $development, $description, $description2;

    public function mount(Development $development)
    {
        $this->description = $development->description;
        $this->description2 = $development->description2;
    }
    public function render()
    {

        return view('livewire.admin.developments.almada.description');
    }

    public function updateDescription()
    {
        $this->development->update([
            'description' => $this->description,
            'description2' => $this->description2,
        ]);
    }
}
