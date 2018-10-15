<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
    public function post()
    {
    	return $this->belongsTo(Post::class);
    }

    public function store($post_id)
    {
    	$this->validate(request(),[
    		'body' => 'required']);
    	Comment::create([
    		'post_id'=> $post_id,
    		'user_id'=> auth()->id(),
    		'body'	 => request('body')]);
    	return back();
    }
}
