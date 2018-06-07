<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	@include('partials._header')
</head>

<body>
	<!-- MySidenav start -->
	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" onclick="closeNav()" title="Close">
			<img class="close" src="{{ asset('img/close.png') }}" alt="img/close.png" />
		</a>
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
	<!-- MySidenav end -->
	<!-- Sidenav start -->
	<div id="sidenav" onclick="openNav()">
		<img class="sidenav-icon" src="{{ asset('img/side-menu.png') }}" alt="img/side-menu.png" title="Side menu" />
	</div>
	<!-- Sidenav end -->
	<div id="app">
		@include('partials._nav')
		@yield('content')
		<div class="push-footer"></div>
	</div>
	@include('partials._footer')
</body>

</html>
