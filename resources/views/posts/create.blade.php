@extends('layouts.app')

@section('content')
	<!-- <form method="post" action="/posts"> -->

	{!!Form::open(['method' => 'POST', 'action' => 'PostsController@store', 'files' => true ])!!}
	
		
	{!! Form::label('title', 'Title:') !!}
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
	<br>
	{!! Form::hidden('user_id', 0, ['class' => 'form-control']) !!}
	{!! Form::label('content', 'Content:') !!}
	{!! Form::text('content', null, ['class' => 'form-control']) !!}
	<br>
	{!! Form::file('file', ['class' => 'form-control']) !!}
	<br>
	{!! Form::submit('Click Me!') !!}
	{!! Form::close() !!} 
	<!-- </form> -->

	@if(count($errors)> 0)
		<div>
		@foreach($errors->all() as $error)
			<p> {{$error}}</p>
		@endforeach
		</div>
	@endif
@endsection