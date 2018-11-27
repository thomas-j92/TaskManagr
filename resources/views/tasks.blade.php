@extends('inc.header')
{{-- @extends('inc.nav') --}}

@section('title', 'My Tasks')

@section('content')
	{{-- <tasks></tasks> --}}

	<li v-for="task in tasks">@{{ task }}</li>

	<input type="text" id="new_task">
	<button id="new_task_btn">Add Task</button>
@endsection