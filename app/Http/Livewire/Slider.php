<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class Slider extends Component
{
    use WithPagination;

    public $prev, $next;

    public function render()
    {
        return view('livewire.slider', [
            'users' => User::simplePaginate(1)
        ]);
    }
}
