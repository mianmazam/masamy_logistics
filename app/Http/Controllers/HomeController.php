<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('home');
        if(Auth::check()){
            if(Auth::user()->isUser()) {
                return redirect()->route('user.dashboard');
            } else if(Auth::user()->isAdmin()) {
                return redirect()->route('admin.dashboard');
            } 
        }
    }
}
