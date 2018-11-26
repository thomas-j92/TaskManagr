@extends('inc.header')
{{-- @extends('inc.nav') --}}

@section('title', 'My Tasks')

@section('content')
	<tasks></tasks>
	
	<ul>
	@foreach($tasks as $task)
		<li>{{ $task->task }}</li>
	@endforeach
	</ul>
@endsection