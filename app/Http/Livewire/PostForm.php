<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Illuminate\Http\Request;
use Livewire\Component;

class PostForm extends Component
{
    public $title;
    public $body;
    public $post_id;

    protected $rules = [
        'title' => 'required|string|min:5|max:255',
        'body' => 'required|string|min:5|max:255',
    ];

    public function create()
    {
        $this->validate();

        $post = Post::create([
            'user_id' => auth()->id(),
            'title' => $this->title,
            'body' => $this->body
        ]);

        $this->reset();
        return redirect('dashboard');
    }

    public function render()
    {
        return view('livewire.post-form');
    }
}
