<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{

	public function index()
	{
		//$posts = Post::all();
		$posts = Post::latest()->get();
		return view('index')->with(['posts' => $posts]);
	}

	public function show($id)
	{
		//$post = Post::find($id);
		$post = Post::findOrFail($id);
		return view('posts.show')->with(['post' => $post]);
	}
}