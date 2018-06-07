<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
	@include('partials._header')
</head>

<body>
	@include('partials._nav')
	@yield('content')
	<div class="push-footer"></div>
	@include('partials._footer')
</body>

</html>
