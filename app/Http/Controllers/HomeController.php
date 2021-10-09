<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
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
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home(){
        $posts = new Posts(); 
        $post = $posts->orderBy('id', 'desc')->get();

        return view('home', ["posts" => $post]);
    }
    public function post(){
        if (!Auth::check() ){
            return redirect()->route("home");
        }
        return view('add-post');
    }
}
