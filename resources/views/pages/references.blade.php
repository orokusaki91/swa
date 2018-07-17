@extends('layouts.app') @section('title', 'References') @section('content')
<!-- References start -->
<div id="references">
	<div class="container">
		<div class="row">
			<div class="col-10 offset-1 col-sm-6 offset-sm-0 col-md-4 col-lg-3 mb-5">
				<h5 class="mb-3">Hotel Olden Gstaad</h5>
				<div class="item">
					<a href="https://www.hotelolden.com/de/" target="_blank">
						<img src="{{ asset('img/references/olden.png') }}" class="partner-logo" alt="img/references/olden.png" title="Hotel Olden" />
					</a>
				</div>
			</div>
			<div class="col-10 offset-1 col-sm-6 offset-sm-0 col-md-4 col-lg-3 mb-5">
				<h5 class="mb-3">Chesery Club Gstaad</h5>
				<div class="item">
					<a href="https://cheseryclub.ch/" target="_blank">
						<img src="{{ asset('img/references/chesery.png') }}" class="partner-logo" alt="img/references/chesery.png" title="Chesery Club" />
					</a>
				</div>
			</div>
			<div class="col-10 offset-1 col-sm-6 offset-sm-0 col-md-4 col-lg-3 mb-5">
				<h5 class="mb-3">Hotel Bellerive Gstaad</h5>
				<div class="item">
					<a href="https://www.bellerive-gstaad.ch/" target="_blank">
						<img src="{{ asset('img/references/bellerive.png') }}" class="partner-logo" alt="img/references/bellerive.png" title="Hotel Bellerive" />
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- References end -->
@stop
