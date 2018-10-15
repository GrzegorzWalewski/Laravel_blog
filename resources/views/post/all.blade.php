@extends('layouts.app')
@section('post')
@foreach($posts as $post)
<div class="blog-post">
   <h2 class="blog-post-title"><a href="/{{ $post->id }}">{{ $post->title }}</a></h2>
   <p class="blog-post-meta">{{ $post->created_at->diffForHumans() }} by {{ $post->user->name }}</p>
   <p>{{ $post->body }}</p>
</div>
@endforeach
@endsection