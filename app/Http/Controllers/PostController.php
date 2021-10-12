<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // List resources
    public function index()
    {
        // get all the posts via eloquent
        // $posts = Post::get();
        // get all data paginated way 
        // with eager loading
        $posts = Post::with(['user', 'likes'])->paginate(20);
        // dd($posts);

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    // Store Resources 
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

    public function destroy(Post $post)
    {
        $post->delete();

        return back();
    }
}
