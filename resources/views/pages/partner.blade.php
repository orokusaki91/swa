@extends('layouts.app')

@section('title', 'Referenzen')

@section('content')
<!-- References start -->
<div id="references">
	<div class="container">
		<div class="row wow slideInUp">
			@foreach($page->page_contents as $partner)
				<div class="col-10 offset-1 col-sm-6 offset-sm-0 col-md-4 col-lg-3 mb-5">
					<h5 class="mb-3">{{ $partner->title }}</h5>
					<div class="item">
						<a href="{{ $partner->text }}" target="_blank">
							<img src="{{ asset('storage/uploads/' . $page->slug . '/' . $partner->images()->first()->path) }}" class="partner-logo"/>
						</a>
					</div>
				</div>
			@endforeach
		</div>
	</div>
</div>
<!-- References end -->
@stop
