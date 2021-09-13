<?php

namespace App\Http\Livewire\Admin\Configurations;

use Livewire\Component;

class Navigation extends Component
{
    public $videos = false, $images = false;


    public function setNavigation($link)
    {
        switch ($link) {
            case 'videos':
                $this->reset(['images','videos']);
                $this->videos = true;
                break;
            case 'images':
                $this->reset(['images','videos']);
                $this->images = true;
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
