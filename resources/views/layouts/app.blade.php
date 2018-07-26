<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	@include('partials._header')
</head>

<body onload="loader()" class="{{ Route::getCurrentRoute()->uri() == '/' ? 'home-background' : '' }} {{ Route::getCurrentRoute()->uri() == 'kontakt' ? 'background' : '' }}">
	<!-- Loader start -->
	<div id="loader"></div>
	<!-- Loader end -->
	<!-- Mobile start -->
	<div id="mobile" class="d-block d-md-none">
		<!-- Top-menu start -->
		<div id="top-menu">
			<!-- Language mobile start -->
<!--
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
-->
			<!-- Language mobile end -->
			<!-- Side-nav icon start -->
			<img class="side-nav-icon" src="{{ asset('img/side-menu.png') }}" onclick="openNav()" title="Side nav" alt="img/side-menu.png" />
			<!-- Side-nav icon end -->
		</div>
		<!-- Top-menu end -->
		<!-- Sidenav start -->
		<div id="side-nav">
			<a href="{{ url('/') }}" class="logo-link"></a>
			<img class="close" src="{{ asset('img/close.png') }}" onclick="closeNav()" title="Close" alt="img/close.png" />
			<ul class="mb-sm-3">
				<li><a href="{{ url ('/') }}" class="{{ Request::is('/') ? 'active' : '' }}">Home</a></li>
				<li><a href="{{ url ('über_uns') }}" class="{{ Request::is('über_uns') ? 'active' : '' }}">Über<span>uns</span></a></li>
				<li><a href="{{ url ('dienstleistungen') }}" class="{{ Request::is('dienstleistungen') ? 'active' : '' }}">Dienstleistungen</a></li>
				<li><a href="{{ url ('referenzen') }}" class="{{ Request::is('referenzen') ? 'active' : '' }}">Referenzen</a></li>
				<li><a href="{{ url ('partner') }}" class="{{ Request::is('partner') ? 'active' : '' }}">Partner</a></li>
				<li><a href="{{ url ('jobs') }}" class="{{ Request::is('jobs') ? 'active' : '' }}">Jobs</a></li>
				<li><a href="{{ url ('kontakt') }}" class="{{ Request::is('kontakt') ? 'active' : '' }}">Kontakt</a>
			</ul>
		</div>
		<!-- Sidenav end -->
		<!-- Close nav start -->
		<div id="close-nav" onclick="closeNav()"></div>
		<!-- Close nav end -->
	</div>
	<!-- Mobile end -->
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
