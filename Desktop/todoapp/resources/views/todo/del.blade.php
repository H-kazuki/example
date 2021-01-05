@extends('layouts.todoapp')

@section('title', 'Create')

@section('content')
	<form action="/todo/del" method="post">
		@csrf
		<input type="hidden" name="id" value="{{$form->id}}">
		<input type="hidden" name="user_id" value="{{$form->user_id}}">
		<b>title:</b>
		<p>{{$form->title}}</p>
		<b>content:</b>
		<p>{{$form->content}}</p>
		<input type="submit" value="OK">
	</form>
@endsection