<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	{{-- If the pageTitle section exists, show it --}}
	@hasSection('pageTitle')
	<title>{{ env('APP_NAME') }} - @yield('pageTitle', env('APP_NAME'))</title>
	{{-- If the pageTitle section doesn't exist, show this --}}
	@else
	<title>{{ env('APP_NAME') }}</title>
	@endif

	<link rel="stylesheet" href="{{ asset('/css/main.css') }}">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
	{{-- @include('partials.adminNav') --}}

	<div class="top-menu container bg-blue-dark">
		Test
	</div> <!-- /.container -->

	@yield('pageContent')

	@if(App::environment('local'))
	<!-- development version, includes helpful console warnings -->
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	@else
	<!-- production version, optimized for size and speed -->
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
	@endif

</body>
</html>
