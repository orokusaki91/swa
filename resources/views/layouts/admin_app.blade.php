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
					<div class="col-md-6">
						<h3><a href="{{ url('admin') }}">S.W.A. Security Admin</a></h3>
					</div>
					<div class="col-md-6 text-right">			
						<form action="{{ url('logout') }}" method="post">
							{{ csrf_field() }}
							<button type="submit">Log out</button>
							<button type="submit" class="fa-power-off2"><i class="fa fa-power-off" aria-hidden="true"></i></button>
						</form>
					</div>
				</div>
			</div>
			@endif
		</nav>
		<div id="side-menu">
			@include('partials.admin._nav')
		</div>
		<div id="content">
			@yield('content')
		</div>
		<!-- Push-footer start -->
		<div class="push-footer"></div>
		<!-- Push-footer end -->
	</div>
	<!-- App end -->
	@include('partials.admin._footer')
</body>

</html>
