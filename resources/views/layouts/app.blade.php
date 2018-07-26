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
				<li class="{{ Request::is('/') ? 'active' : '' }}"><a href="{{ url ('/') }}" class="active">Home</a></li>
				<li class="{{ Request::is('über_uns') ? 'active' : '' }}"><a href="{{ url ('über_uns') }}">Über<span>uns</span></a></li>
				<li class="{{ Request::is('dienstleistungen') ? 'active' : '' }}"><a href="{{ url ('dienstleistungen') }}">Dienstleistungen</a></li>
				<li class="{{ Request::is('referenzen') ? 'active' : '' }}"><a href="{{ url ('referenzen') }}">Referenzen</a></li>
				<li class="{{ Request::is('partner') ? 'active' : '' }}"><a href="{{ url ('partner') }}">Partner</a></li>
				<li class="{{ Request::is('jobs') ? 'active' : '' }}"><a href="{{ url ('jobs') }}">Jobs</a></li>
				<li class="{{ Request::is('kontakt') ? 'active' : '' }}"><a href="{{ url ('kontakt') }}">Kontakt</a>
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
