<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class EditPostController extends Controller
{
    public function edit(Request $request, Int $id)
    {
        $post = Post::findOrFail($id);

        return view('edit')->with('post', $post);
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $post->update($request->all());
        return redirect('dashboard');


    }

    //     public function edit(Request $request, $id)
    // {
    //     $posts = Post::findOrFail($id);

    //     return view('edit')->with('posts', $posts);;
    // }
}
