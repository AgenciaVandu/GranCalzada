<?php

namespace App\Http\Livewire\Admin\Developments\Almada;

use App\Models\Development;
use Livewire\Component;

class Button extends Component
{
    public $development, $url, $text, $description;

    public function mount(Development $development)
    {
        $this->url = $development->button->url;
        $this->text = $development->button->text;
        $this->description = $development->button->description;
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
