<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostsController extends Controller
{
    public function index()
    {
    	$posts= Post::latest()->get();
    	return view('post.all',compact('posts'));
    }
    public function show(Post $post)
    {
    	return view('post.show',compact('post'));
    }
}
