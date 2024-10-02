<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        // Validate the form input
        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
        ]);

        // Create a new blog post
        Post::create($validated);

        // Redirect back to the create form with a success message
        return redirect()->route('posts.create')->with('success', 'Post created successfully!');
    }
}
