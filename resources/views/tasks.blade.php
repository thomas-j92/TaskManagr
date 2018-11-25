@extends('inc.header')
@extends('inc.nav')

@section('title', 'My Tasks')

@section('content')
	<h2>Show all tasks</h2>
	
	<ul>
	@foreach($tasks as $task)
		<li>{{ $task->task }}</li>
	@endforeach
	</ul>
@endsection