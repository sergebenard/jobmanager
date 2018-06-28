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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">

	<!-- CSRF Token -->
	<meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body>
	{{-- @include('partials.adminNav') --}}

	<header class="top-menu block relative">
		<div class="absolute pin-t pin-l bg-blue-darker">
			<nav class="block static bg-blue-darker">
				<div class="block static">
					<a class="block static text-blue-lighter text-center p-4 hover:bg-blue-light hover:text-blue-darker" href="#">
						<icon class="fas fa-bars fa-2x"></icon>
					</a>
				</div>
			</nav>
		</div>

		<nav class="main-menu static flex justify-center bg-blue-darker">
			<a
				class="block text-center text-blue-lighter text-center bg-blue-dark p-4 hover:bg-blue-light hover:text-blue-darker"
				href="#"
			>
				<icon class="fas fa-search fa-2x"></icon>

				<span class="triangle"></span>
			</a>
			<a class="block text-center text-blue-lighter text-center bg-blue-dark p-4 hover:bg-blue-light hover:text-blue-darker" href="#">

				<icon class="fas fa-plus-circle fa-2x"></icon>

				<span class="triangle"></span>
			</a>
			<a class="block text-center text-blue-lighter text-center bg-blue-dark p-4 hover:bg-blue-light hover:text-blue-darker" href="#">
				<icon class="fas fa-history fa-2x"></icon>

				<span class="triangle"></span>
			</a>
		</nav>
		<nav class="">

		</nav>
	</header> <!-- /.container -->
	<main>
		@yield('pageContent')
	</main>

	<footer>

	</footer>
	@if(App::environment('local'))
	<!-- development version, includes helpful console warnings -->
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
	@else
	<!-- production version, optimized for size and speed -->
	<script src="https://cdn.jsdelivr.net/npm/vue"></script>
	@endif

</body>
</html>
