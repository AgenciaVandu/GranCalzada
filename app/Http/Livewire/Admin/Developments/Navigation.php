<?php

namespace App\Http\Livewire\Admin\Developments;

use App\Models\Development;
use Livewire\Component;

class Navigation extends Component
{
    public $almada = false, $miraverde = false;
    public $index = false, $models = false, $lots = false;
    public $dev_almada, $dev_miraverde;

    public function mount()
    {
        $this->dev_almada = Development::find(1);
        $this->dev_miraverde = Development::find(2);
    }

    public function setNavigation($link)
    {
        switch ($link) {
            case 'almada':
                $this->reset(['almada', 'miraverde']);
                $this->almada = true;
                break;
            case 'miraverde':
                $this->reset(['almada', 'miraverde']);
                $this->miraverde = true;
                break;
            case 'index':
                $this->reset(['index', 'models', 'lots']);
                $this->index = true;
                break;
            case 'models':
                $this->reset(['index', 'models', 'lots']);
                $this->models = true;
                break;
            case 'lots':
                $this->reset(['index', 'models', 'lots']);
                $this->lots = true;
                break;
            default:
                # code...
                break;
        }
    }
    public function render()
    {
        return view('livewire.admin.developments.navigation');
    }
}
