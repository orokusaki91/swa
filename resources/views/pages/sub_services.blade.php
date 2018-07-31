@extends('layouts.app') @section('title', 'Schutz') @section('content')

<!-- Protection start -->
<div id="services">
	<div class="container">
		<div id="protection">
			<div class="text-center wow slideInUp">
				<img src="{{ asset('img/icon/' . getServiceImage()[$page->id] . '.png') }}" class="logo" title="Schutz" alt="img/icon/protection.png" />
				<h2>{{ $page->name }}</h2>
			</div>
			<div class="row">
				@foreach($services->chunk(2) as $service)
					<div class="col-md-6">
						@foreach($service as $s)
							<div class="service-item wow slideInUp">{!! $s->text !!}</div>
						@endforeach
					</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
<!-- Protection end -->
@stop
