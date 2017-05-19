<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
   public function __construct() {

	        $this->middleware('auth');

	    }
    public function show()
    {    	
    	$id=\Auth::user()->id;

    	$posts = \App\Post::where('user_id','=' ,$id )->get();
    	return view('users.dashboard',compact('posts'));
    }

   
}
