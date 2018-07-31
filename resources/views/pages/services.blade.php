@extends('layouts.app') @section('title', 'Dienstleistungen') @section('content')
<!-- Services start -->
<div id="services">
	<div class="container">
		<div class="row">
			@foreach(App\Page::where('has_nav', 0)->get() as $key => $service)
				<div class="col-md-6 col-lg-4 mb-5">
				<div class="item wow slideInUp">
					<div class="icon text-center">
						<img src="{{ asset('img/icon/' . getServiceImage()[$service->id] . '.png') }}" title="{{ $service->name }}" alt="{{ $service->name }}" />
					</div>
					<h3 class="text-center">
						<a href="{{ url($service->slug) }}">{{ $service->name }}</a>
					</h3>
					<div id="{{ 'service-text-' . $key }}">
						{!! \Illuminate\Support\Str::words($service->page_contents->first()->text, 40) !!}
					</div>
					<a class="btn btn-readMore" href="{{ url($service->slug) }}" role="button">Alles sehen</a>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
<!-- Services end -->
@stop

@section('scripts')
<script>
	$(function () {
		var serviceText = $('*[id^="service-text"]');
		serviceText.css('padding-bottom', '75px');
		serviceText.find(':header:first-child').remove();
	});
</script>
@stop
