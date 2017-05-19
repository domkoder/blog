<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Post;

class PostController extends Controller{

	 public function __construct() {

	        $this->middleware('auth')->except(['index','show']);

	    }

	public function index(){
			//Post model@scopFilter
		$posts = Post::latest()
			->filter(request(['month','year']))
			->get();

			//Post model@archives
		return view('posts.index', compact('posts' ));

	}

	public function create(){

		return view('posts.create');

	}

	public function store(){

		$this->validate(request(),[

		'title' => 'required',

		'body' => 'required'

		]);

		auth()->user()->publish(
			new Post(request(['title' , 'body']))
			);
		// flash message 
		session()->flash('message', 'Your post has now been published. ');
		
		return redirect('/');
	}

	public function show(Post $post){


		return view('posts.show', compact('post'));
	}

	public function edit()
	{
		$id=Auth::user()->id;

		$posts = Post::where('user_id','=' ,$id )->get();
		
		return view('posts.editpage',compact('posts'));
	}
	public function DeletePost($id)
	{
		$posts = Post::find($id);
	       	$posts->delete();
	   	$comments=\App\Comment::where('post_id','=',$id);

	   	if($comments != null){
			$comments->delete();
	   	}
	      	return back();
	}
	public function EditForm($id)
	{
		$post = Post::where('id','=',$id)->first();

		return view('users.editform',compact('post'));
	}
	public function EditPost($id)
	{

		$post = Post::find($id);
		$post->Title = request('title');
		$post->Body = request('body');
		$post->save();

		return redirect('/edit/post');
	}



}
