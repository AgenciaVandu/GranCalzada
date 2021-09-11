<?php

namespace App\Http\Livewire\Admin\Configurations;

use Livewire\Component;

class Navigation extends Component
{
    public $videos = false, $images = false, $sliders = false;


    public function setNavigation($link)
    {
        switch ($link) {
            case 'videos':
                $this->reset(['images', 'videos','sliders']);
                $this->videos = true;
                break;
            case 'images':
                $this->reset(['images', 'videos','sliders']);
                $this->images = true;
                break;
            case 'sliders':
                $this->reset(['images', 'videos','sliders']);
                $this->sliders = true;
                break;

            default:
                # code...
                break;
        }
    }

    public function render()
    {
        return view('livewire.admin.configurations.navigation');
    }
}
