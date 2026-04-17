<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|max:280',
        ]);

        Post::create([
            'user_id' => Auth::id(),
            'content' => $request['content'],
        ]);

        return back();
    }

    public function index()
    {
        $posts = Post::with('user')->latest()->get();

        return view('home', compact('posts'));
    }

    public function edit(Post $post)
    {
        if (auth()->id() !== $post->user_id) {
            abort(403);
        }
        return view('edit-post', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        if (auth()->id() !== $post->user_id) {
            abort(403);
        }
        $request->validate([
            'content' => 'required|max:280',
        ]);

        $post->update([
            'content' => $request['content'],
        ]);

        return redirect('/home');
}
}