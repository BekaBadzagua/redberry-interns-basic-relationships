<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
	public function index()
	{
		return response()->json(Post::all(), 200);
	}

	public function get(Post $post)
	{
		return response()->json($post, 200);
	}

	public function comments(Post $post)
	{
		return response()->json($post->comments, 200);
	}
}
