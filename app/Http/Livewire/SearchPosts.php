<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class SearchPosts extends Component
{
    public $search;

    public function render()
    {
        return view('livewire.search-posts');
    }


    public function getResultsProperty()
    {
        return Post::where('title', 'LIKE', '%' . $this->search . '%')->take(8)->get();
    }
}
