<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	@include('partials.admin._header')
</head>

<body onload="loader()">
	<!-- Loader start -->
	<div id="loader"></div>

	<nav>  
	     @if(Auth::check())
	        <div class="admin_panel_head_inner">
	            <h1><a href="{{ url('admin') }}" style="text-decoration: none; color: #fff">CS Logistik Admin</a></h1>
	        
	            <form action="{{ url('logout') }}" method="post">
	                {{ csrf_field() }}
	                <button type="submit">Log out</button>
	                <button type="submit" class="fa-power-off2"><i class="fa fa-power-off" aria-hidden="true"></i></button>
	            </form>
	        </div>
	     @endif
	</nav>

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
