<?php

namespace App\Http\Livewire\Admin\Configurations;

use App\Models\Slider;
use Livewire\Component;

class Sliders extends Component
{
    public function render()
    {
        $amavita = Slider::where('section', 'amavita')->first();
        return view('livewire.admin.configurations.sliders', compact('amavita'));
    }
}
