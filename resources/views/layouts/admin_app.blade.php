<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	@include('partials.admin._header')
</head>

<body onload="loader()">
	<!-- Loader start -->
	<div id="loader"></div>

	<!-- App start -->
	<div id="app">
		<nav>  
			@if(Auth::check())
			<div class="admin_panel_head_inner">
				<div class="row align-items-center">
					<div class="col-md-6 text-center text-md-left">
						<h3><a href="{{ url('admin') }}">S.W.A. Security Admin</a></h3>
					</div>
					<div class="col-md-6 text-center text-md-right">			
						<form action="{{ url('logout') }}" method="post">
							{{ csrf_field() }}
							<button type="submit"><i class="fas fa-power-off mr-2" aria-hidden="true"></i><span class="logout">Log out</span></button>
						</form>
					</div>
				</div>
				<img class="side-nav-icon d-md-none" src="{{ asset('img/side-menu.png') }}" onclick="openNav()" title="Side nav" alt="img/side-menu.png" />
			</div>
			@endif
		</nav>
		<div id="side-menu">
			<img class="close d-md-none" src="{{ asset('img/close.png') }}" onclick="closeNav()" title="Close" alt="img/close.png" />
			@include('partials.admin._nav')
		</div>
		<!-- Close nav start -->
		<div id="close-nav" onclick="closeNav()"></div>
		<!-- Close nav end -->
		<div id="content">
			@yield('content')
			<!-- Back-to-top start -->
			<a href="javascript:void(0)" id="back-to-top" title="Back to top"></a>
			<!-- Back-to-top end -->
		</div>
		<!-- Push-footer start -->
		<div class="push-footer"></div>
		<!-- Push-footer end -->
	</div>
	<!-- App end -->
	@include('partials.admin._footer')
</body>

</html>
