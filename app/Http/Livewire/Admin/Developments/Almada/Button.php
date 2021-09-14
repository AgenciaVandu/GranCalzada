<?php

namespace App\Http\Livewire\Admin\Developments\Almada;

use App\Models\Development;
use Livewire\Component;

class Button extends Component
{
    public $dev_almada, $url, $text, $description;

    public function mount(Development $dev_almada)
    {
        $this->url = $dev_almada->button->url;
        $this->text = $dev_almada->button->text;
        $this->description = $dev_almada->button->description;
    }

    public function updateButton()
    {
        $this->dev_almada->button->update([
            'url' => $this->url,
            'text' => $this->text,
            'description' => $this->description,
        ]);
    }

    public function render()
    {
        return view('livewire.admin.developments.almada.button');
    }
}
