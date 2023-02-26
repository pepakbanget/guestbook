<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;

class DisplayPosts extends Component
{
    public $perPage = 10;

    public function loadMore()
    {
        $this->perPage += 10;
    }

    public function render()
    {
        return view('livewire.display-posts', ['posts' => Post::latest()->paginate($this->perPage)]);
    }
}
