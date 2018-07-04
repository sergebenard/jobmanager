	{{-- required: [menuName], [menuDescription], [menuIcon], [menuLink], [subMenuContent] --}}
	<li class="w-full">
		<a href="#" class="w-16 h-16 block text-center text-blue-lighter bg-blue-dark p-4 hover:bg-blue-light hover:text-blue-darker">
			<icon class="fas {{ $menuIcon }} fa-2x"></icon>

			<span class="triangle"></span>
		</a>

		<ul
			class="sub-menu list-reset w-64 bg-blue-white pin-x mx-auto mt-4 absolute rounded shadow-md border-t-8 border-blue-light"
		>
			<li class="w-full">
				{{ $subMenuContent }}
			</li>
		</ul>
	</li>
