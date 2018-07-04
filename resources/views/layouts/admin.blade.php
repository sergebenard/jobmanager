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

	<header class="block relative">
		<nav class="top-menu side-menu absolute pin-t pin-l bg-blue-darker block static bg-blue-darker">
			<a class="side-menu-item w-16 h-16 block static text-blue-lighter text-center p-4 hover:bg-blue-light hover:text-blue-darker" href="#">
				<icon class="fas fa-bars fa-2x"></icon>
				<span class="triangle"></span>
			</a>
		</nav>

		<nav class="top-menu inline static flex justify-center bg-blue-darker">
			<ul class="main-menu list-reset flex">

			@component('partials.admin-nav-slot')
			{{-- required: [menuName], [menuDescription], [menuIcon], [menuLink], [subMenuContent] --}}
			@slot('menuName', 'Search')
			@slot('menuDescription', 'Search for jobs, contacts, contracts, etc.')
			@slot('menuIcon', 'fa-search')
			@slot('menuLink', '#')
			@slot('subMenuContent')
				@include('partials.admin-nav-search')
			@endslot
			@endcomponent

			@component('partials.admin-nav-slot')
			{{-- required: [menuName], [menuDescription], [menuIcon], [menuLink], [subMenuContent] --}}
			@slot('menuName', 'Jobs')
			@slot('menuDescription', 'Manage Jobs.')
			@slot('menuIcon', 'fa-briefcase')
			@slot('menuLink', '#')
			@slot('subMenuContent')
				@include('partials.admin-nav-jobs')
			@endslot
			@endcomponent

			@component('partials.admin-nav-slot')
			{{-- required: [menuName], [menuDescription], [menuIcon], [menuLink], [subMenuContent] --}}
			@slot('menuName', 'Invoices')
			@slot('menuDescription', 'Manage Invoices.')
			@slot('menuIcon', 'fa-file-invoice-dollar')
			@slot('menuLink', '#')
			@slot('subMenuContent')
				@include('partials.admin-nav-invoices')
			@endslot
			@endcomponent

				{{-- <li class="inline w-full">
					<a href="#" class="w-16 h-16 block text-center text-blue-lighter bg-blue-dark p-4 hover:bg-blue-light hover:text-blue-darker">
						<icon class="fas fa-search fa-2x"></icon>

						<span class="triangle"></span>
					</a>

					<ul
						class="sub-menu list-reset w-64 bg-blue-white pin-x mx-auto mt-4 absolute rounded shadow-md"
					>
						<li class="w-full">
							<form
								class="w-full max-w-sm p-4 block"
								action="#"
								method="post">

								<label
									for="text-field-search"
									class="block text-sm text-blue-dark mb-2"
								>
									Enter numbers or letters.
								</label>

								<div class="form-group flex flex-wrap items-stretch w-full relative">
									<input
										type="text"
										class="flex-shrink bg-blue-lightest flex-grow flex-auto leading-normal w-px flex-1 appearance-none border-none h-10 rounded rounded-r-none px-3 relative outline-none text-blue-dark shadow-inner"
										id="text-field-search"
										name="search"
										required
									>
									<button class="flex -mr-px items-center leading-normal bg-blue-lighter rounded rounded-l-none appearance-none border-none px-3 whitespace-no-wrap text-blue-darkest text-xs shadow-inner">
										Search
									</button>
								</div>
							</form>
						</li>


					</ul>

				</li> --}}
			</ul>

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
