<?php

namespace App\Http\Livewire;

use App\Models\Post;
use Livewire\Component;
use Illuminate\Http\Request;

class DisplayPosts extends Component
{

    public $title;
    public $body;
    public $post_id;


    public $perPage = 10;

    public function loadMore()
    {
        $this->perPage += 10;
    }

    public function destroy($id)
    {
        Post::destroy($id);
    }

    // public function edit(Request $request, Int $id)
    // {
    //     $posts = Post::findOrFail($id);

    //     return view('edit',['posts', $posts]);
    // }

    public function render()
    {
        return view('livewire.display-posts', ['posts' => Post::latest()->paginate($this->perPage)]);
    }


}
