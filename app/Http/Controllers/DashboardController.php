<?php

namespace App\Http\Controllers;

use App\Mail\PostLiked;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DashboardController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth']);
    }

    public function index() 
    {
        // dd(auth()->user()->name);
        // dd(auth()->user()->posts);
        // $user = auth()->user();

        // Mail::to($user)->send(new PostLiked());
        
        return view('dashboard');
    }
}
