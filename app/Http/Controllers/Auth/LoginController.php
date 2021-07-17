<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware(['guest']);
    }

    public function index()
    {
        return view('auth.login');
    }

    public function store(Request $request) 
    {
        // dd($request->remember);
        // Login validation 
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // sign in 

        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('status', 'Invalid Login Detail');
        }

        return redirect()->route('dashboard');
    }
}
