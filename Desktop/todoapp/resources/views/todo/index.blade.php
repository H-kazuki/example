@extends('layouts.todoapp')

@section('title', 'Todo')

@section('content')
	<a href="todo/create">Create</a>
	@foreach($items as $item)
		<h3>title:{{$item->title}}</h3>
		@if($item->content != null)
			<p>content:{{$item->content}}</p>
		@endif
		<a href="todo/edit?id={{$item->id}}">Edit</a>
		<a href="todo/del?id={{$item->id}}">Delete</a>
	@endforeach
@endsection