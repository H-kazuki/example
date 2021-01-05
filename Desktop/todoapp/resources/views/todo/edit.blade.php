@extends('layouts.todoapp')

@section('title', 'Create')

@section('content')
	<form action="/todo/edit" method="post">
		@csrf
		<input type="hidden" name="id" value="{{$form->id}}">
		<input type="hidden" name="user_id" value="{{$form->user_id}}">
		<p>title:</p>
		@error('title')
				<p>{{$message}}</p>
		@enderror
		<p><input type="text" name="title" value="{{$form->title}}">(必須)</p>
		<p>content:</p>
		<p><textarea name="content" rows="10" cols="40">{{$form->content}}</textarea></p>
		<input type="submit" value="OK">
	</form>
@endsection