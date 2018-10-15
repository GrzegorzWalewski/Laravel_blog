@extends('layouts.app')
@section('post')
<div class="blog-post">
   <h2 class="blog-post-title">{{ $post->title }}</h2>
   <p class="blog-post-meta">{{ $post->created_at->diffForHumans() }} by {{ $post->user->name }}</p>
   <p>{{ $post->body }}</p>
</div>
@endsection