<?php

namespace App\Http\Livewire\Admin\Developments\Almada;

use App\Models\Development;
use App\Models\Model;
use App\Models\Slider;
use Livewire\Component;
use Livewire\WithFileUploads;
use SplFileInfo;

class Models extends Component
{


    public $development;

    public $models;
    public $slider;

    public function mount(Development $development)
    {
        $this->models = $development->models;
    }

    public function render()
    {
        return view('livewire.admin.developments.almada.models');
    }
}
