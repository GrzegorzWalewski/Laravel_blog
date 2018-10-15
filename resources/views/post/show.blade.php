@extends('layouts.app')
@section('post')
<div class="blog-post">
   <h2 class="blog-post-title">{{ $post->title }}</h2>
   <p class="blog-post-meta">{{ $post->created_at->diffForHumans() }} by {{ $post->user->name }}</p>
   <p>{{ $post->body }}</p>
</div>
<div class="comments">
	@foreach($post->comments as $comment)
		<p>{{ $comment->body }} ~ {{ $comment->user->name }}</p>
	@endforeach
</div>
</br>
@auth
<div class="create_comment">
	<form action="" method="POST">
		{{ csrf_field() }}
		<input type="text" name="body" id="body" placeholder="Your comment">
		<button type="submit">Comment</button>
	</form>
</div>
@endauth
@endsection