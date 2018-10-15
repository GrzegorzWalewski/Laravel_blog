@extends('layouts.app')
@section('post')
@include('layouts.errors')
<form method="POST" action="">
	{{ csrf_field() }}
	<input class="form-control" type="text" name="title" id="title" placeholder="Title" required>
	<textarea class="form-control" name="body" id="body" placeholder="Body" required></textarea>
	<button class="form-control" type="submit">Submit</button>
</form>
@endsection