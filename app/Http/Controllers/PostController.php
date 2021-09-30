<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::query()->latest()->get();

        return view('app',compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);

        return view('posts.show',compact('post'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|min:2|unique:posts,title',
            'description' => 'required|min:10'
        ]);

        Post::create($validatedData);

        return redirect()->route('posts');
    }

    public function delete($id)
    {
        $post = Post::findOrFail($id);

        $post->destroy($id);
        return redirect()->back();
    }
}
