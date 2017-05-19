<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class CommentController extends Controller
{


    public function store(Post $post){
    	if(\Auth::check()){
	    	$this->validate(request(), ['body' => 'required|min:2']);
	    	Comment::create([
	    		'body' => request('body'),
	    		'post_id' => $post->id,
	    		'user_id' => auth()->id() 
			]);
		return back();
	}else {
		return back()->withErrors(['message' => 'Pleas you have to be a user befor you can be able to comment to a post']);
		
	}
   }
}
