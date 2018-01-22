@extends('layouts.app')

@section('content')
	<ul>
		@foreach($posts as $post)
			<div>
				<a href="/images/{{$post->path}}">File Url </a>
			</div>
			<li><a href="{{route('posts.show', $post->id)}}">{{$post->title}}</a></li>
		@endforeach
	</ul>
@endsection