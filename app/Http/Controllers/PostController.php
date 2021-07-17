<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
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
