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

</head>
<body>
	@hasSection('pageContent')
	@yield('pageContent')
	@else
	<p>Something has gone wrong! It'd be great if <a href="{{ env('APP_ADMIN') }}">you'd let us know</a>!</p>
	@endif

	@if(App::environment('local'))
	<!-- development version, includes helpful console warnings -->
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	@else
	<!-- production version, optimized for size and speed -->
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
	@endif

</body>
</html>
