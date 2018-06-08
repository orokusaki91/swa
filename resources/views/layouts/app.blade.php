<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	@include('partials._header')
</head>

<body>
	<!-- Sidenav start -->
	<div id="side-nav">
		<img class="close" src="{{ asset('img/close.png') }}" onclick="closeNav()" title="Close" alt="img/close.png" />
		<ul>
			<li><a href="{{ url ('/') }}">Home</a></li>
			<li><a href="{{ url ('about_us') }}">Über<span>uns</span></a></li>
			<li><a href="{{ url ('services') }}">Dienstleistungen</a></li>
			<li><a href="{{ url ('references') }}">Referenzen</a></li>
			<li><a href="{{ url ('partner') }}">Partner</a></li>
			<li><a href="{{ url ('jobs') }}">Jobs</a></li>
			<li><a href="{{ url ('contact') }}">Kontakt</a>
		</ul>
	</div>
	<!-- Sidenav end -->
	<!-- Sidenav start -->
	<div id="top-menu">
		<img class="side-nav" src="{{ asset('img/side-menu.png') }}" onclick="openNav()" title="Side menu" alt="img/side-menu.png" />
		<!-- Language mobile start -->
		<li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<img src="{{ asset('img/flag/de.png') }}" class="language" title="Deutsch" alt="img/flag/de.png" />
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdown">
				<a class="dropdown-item active" href="#">
					<img src="{{ asset('img/flag/de.png') }}" class="flag" title="Deutsch" alt="img/flag/de.png" />
					Deutsch
				</a>
				<a class="dropdown-item" href="#">
					<img src="{{ asset('img/flag/gb.png') }}" class="flag" title="Englisch" alt="img/flag/gb.png" />
					Englisch
				</a>
			</div>
		</li>
		<!-- Language mobile end -->
	</div>
	<!-- Sidenav end -->
	<!-- App start -->
	<div id="app">
		@include('partials._nav')
		@yield('content')
		<!-- Push-footer start -->
		<div class="push-footer"></div>
		<!-- Push-footer end -->
	</div>
	<!-- App end -->
	@include('partials._footer')
</body>

</html>
