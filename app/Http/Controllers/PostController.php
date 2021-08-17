<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // get all the posts via eloquent
        $posts = Post::get();

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->body);
        // Validate 
        $this->validate($request, [
            'body' => 'required'
        ]);

        // Create the post and also associate with the user 
        // Post::create([
        //     'user_id' => auth()->id(),
        //     'body' => $request->body
        // ]);

        $request->user()->posts()->create($request->only('body'));

        return back();
        
    }
}
