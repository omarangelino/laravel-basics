@extends('layouts.app')

@section('content')
	<h1>Edit Post</h1>
	<!-- <form method="post" action="/posts/{{$post->id}}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="PUT">
		
		<input type="text" name="title" placeholder="Post Title" value="{{$post->title}}">
		<input type="hidden" name="user_id" value="0" placeholder="Post Title" >
		<input type="text" name="content" placeholder="Post Content" value="{{$post->content}}">
		<input type="submit" name="submit" value="Store">
	</form> -->
	{!!Form::model($post, ['method' => 'PATCH', 'action' => ['PostsController@update', $post->id]])!!}
	{!! Form::label('title', 'Title:') !!}
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
	{!! Form::hidden('user_id', 0, ['class' => 'form-control']) !!}
	{!! Form::label('content', 'Content:') !!}
	{!! Form::text('content', null, ['class' => 'form-control']) !!}
	{!! Form::submit('update Post!', ['class' => 'btn btn-info']) !!}
	{!! Form::close() !!} 

	<!-- <form method="post" action="/posts/{{$post->id}}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}">
		<input type="hidden" name="_method" value="DELETE">
		<input type="submit" name="submit" value="DELETE">
	</form> -->
	{!!Form::model($post, ['method' => 'DELETE', 'action' => ['PostsController@destroy', $post->id]])!!}
	{!! Form::submit('Delete Post!', ['class' => 'btn btn-danger']) !!}
	{!! Form::close() !!} 
@endsection