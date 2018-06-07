<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	@include('partials._header')
</head>

<body>
	<!-- mySidenav start -->
	<div id="mySidenav" class="sidenav">
		<a href="javascript:void(0)" onclick="closeNav()" title="Close">
			<img class="close" src="{{ asset('img/close.png') }}" alt="img/close.png" />
		</a>
		<ul>
			<li><a href="javascript:void(0)" class="active">Home</a></li>
			<li><a href="javascript:void(0)">Über<span>uns</span></a></li>
			<li><a href="javascript:void(0)">Dienstleistungen</a></li>
			<li><a href="cartjavascript:void(0)">Referenzen</a></li>
			<li><a href="javascript:void(0)">Partner</a></li>
			<li><a href="javascript:void(0)">Jobs</a></li>
			<li><a href="javascript:void(0)">Kontakt</a>
		</ul>
	</div>
	<!-- mySidenav end -->
	<!-- Sidenav start -->
	<a id="sidenav" onclick="openNav()" title="Side menu">
		<img class="sidenav-icon" src="{{ asset('img/side-menu.png') }}" alt="img/side-menu.png" />
	</a>
	<!-- Sidenav end -->
	<div id="app">
		@include('partials._nav')
		@yield('content')
		<div class="push-footer"></div>
	</div>
	@include('partials._footer')
</body>

</html>
