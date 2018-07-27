<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	@include('partials.admin._header')
</head>

<body onload="loader()">
	<!-- Loader start -->
	<div id="loader"></div>
	<!-- Loader end -->
	<!-- Mobile start -->
	<div id="mobile" class="d-block d-md-none">
		<!-- Top-menu start -->
		<div id="top-menu">
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
		@include('partials.admin._nav')

		@yield('content')
		<!-- Push-footer start -->
		<div class="push-footer"></div>
		<!-- Push-footer end -->
	</div>
	<!-- App end -->
	@include('partials.admin._footer')
</body>

</html>
