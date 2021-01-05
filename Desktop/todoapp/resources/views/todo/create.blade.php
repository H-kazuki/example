@extends('layouts.todoapp')

@section('title', 'Create')

@section('content')
	<form action="/todo/create" method="post">
		@csrf
		<input type="hidden" name="user_id" value="{{$user_id}}">
		<p>title:</p>
		@error('title')
				<p>{{$message}}</p>
		@enderror
		<p><input type="text" name="title">(必須)</p>
		<p>content:</p>
		<p><textarea name="content" rows="10" cols="40"></textarea></p>
		<input type="submit" value="OK">
	</form>
@endsection