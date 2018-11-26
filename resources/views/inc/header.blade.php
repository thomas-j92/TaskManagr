<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title', 'TaskManagr')</title>
		<meta name="csrf-token" content="{{ csrf_token() }}">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" href="{{ mix('css/app.css') }}">
		
	</head>

	<body>
		<div id="app">
			<navbar></navbar>
			
			<div class="container">
				@yield('content')
			</div>
		</div>
		
		<script src="{{ mix('js/app.js') }}"></script>
	</body>
</html>