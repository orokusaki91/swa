@extends('layouts.app')

@section('title', 'Partner')

@section('content')
<!-- Partner start -->
<div id="partner">
	<div class="container">
		<div class="row">
			<div class="col-10 offset-1 col-sm-6 offset-sm-0 col-md-4 col-lg-3 mb-5">
				<h5 class="mb-3">Chesery Club Gstaad</h5>
				<div class="item">
					<a href="https://cheseryclub.ch/" target="_blank">
						<img src="{{ asset('img/partner/chesery.png') }}" class="partner-logo" alt="img/partner/chesery.png" title="Chesery Club" />
					</a>
				</div>
			</div>
			<div class="col-10 offset-1 col-sm-6 offset-sm-0 col-md-4 col-lg-3 mb-5">
				<h5 class="mb-3">Titan Sicherheit GmbH</h5>
				<div class="item">
					<a href="https://www.titan-sicherheit.ch/" target="_blank">
						<img src="{{ asset('img/partner/titan.png') }}" class="partner-logo" alt="img/partner/titan.png" title="Titan" />
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Partner end -->
@stop
