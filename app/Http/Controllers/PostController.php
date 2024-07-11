<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Topic;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Topic $topic)
    {
        return view('posts.create', compact('topic'));
    }

    public function store(Request $request, Topic $topic)
    {
        $request->validate([
            'content' => 'required|string',
        ]);

        $topic->posts()->create([
            'herbalist_id' => auth()->id(),
            'content' => $request->content,
        ]);

        return redirect()->route('topics.show', $topic)->with('success', 'Post created successfully.');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('topics.show', $post->topic)->with('success', 'Post deleted successfully.');
    }
}
