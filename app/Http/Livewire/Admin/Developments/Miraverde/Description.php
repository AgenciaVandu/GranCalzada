<?php

namespace App\Http\Livewire\Admin\Developments\Miraverde;

use App\Models\Development;
use Livewire\Component;

class Description extends Component
{
    public $development, $description;

    public function mount(Development $development)
    {
        $this->description = $development->description;
    }
    public function render()
    {

        return view('livewire.admin.developments.miraverde.description');
    }

    public function updateDescription()
    {
        $this->dev_almada->update([
            'description' => $this->description
        ]);
    }
}