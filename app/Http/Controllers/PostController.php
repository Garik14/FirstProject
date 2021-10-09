<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\NewPostRequest;
use App\Models\Posts;

class PostController extends Controller{
	public function form(NewPostRequest $req){
    	/*$validation = $req->validate([
    		"title" => "required|max:50",
    		"description" => "required|min:5|max:250",
    		"image" => "required"
    	]);*/
    	//dd($req);

    	//dd($req->all());
    	/*$test = $req->file('image')->guessClientExtension();
    	//dd($test);
    	$posts = new Posts(); 
    	$file;*/
    	$posts = new Posts(); 
    	$path = $req->file('image')->store('uploads', 'public');

    	$posts->title = $req->input('title');
    	$posts->description = $req->input('description');
    	$posts->image = $path;

    	$posts->save();

    	/*if ($req->file('image') == null) {
    		$file = "";
		}else{
   			$file = $req->file('image')->store('images');  
   			dd($file);
		}*/

    	//dd($file);


    	//return view("home"); 
    	return redirect()->route("home");
    }
}
