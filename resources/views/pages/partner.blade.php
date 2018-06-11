@extends('layouts.app') 

@section('title', 'Partner')

@section('content')
<!-- Partner start -->
<div id="partner">
	<div class="container">
		<div class="row">
			<div class="col-10 offset-1 col-sm-6 offset-sm-0 col-md-4 col-lg-3 mb-5">
				<div class="item">
					<img src="{{ asset('img/partner/auto.jpg') }}" class="partner-logo" alt="img/partner/auto.jpg" title="Auto Security" />
				</div>
			</div>
			<div class="col-10 offset-1 col-sm-6 offset-sm-0 col-md-4 col-lg-3 mb-5">
				<div class="item">
					<img src="{{ asset('img/partner/eagle.jpg') }}" class="partner-logo" alt="img/partner/eagle.jpg" title="Eagle Security" />
				</div>
			</div>
			<div class="col-10 offset-1 col-sm-6 offset-sm-0 col-md-4 col-lg-3 mb-5">
				<div class="item">
					<img src="{{ asset('img/partner/cloud.jpg') }}" class="partner-logo" alt="img/partner/cloud.jpg" title="Cloud Security" />
				</div>
			</div>
			<div class="col-10 offset-1 col-sm-6 offset-sm-0 col-md-4 col-lg-3 mb-5">
				<div class="item">
					<img src="{{ asset('img/partner/tagline-here.jpg') }}" class="partner-logo" alt="img/partner/tagline-here.jpg" title="Security Tagline Here" />
				</div>
			</div>
			<div class="col-10 offset-1 col-sm-6 offset-sm-0 col-md-4 col-lg-3 mb-5">
				<div class="item">
					<img src="{{ asset('img/partner/family.jpg') }}" class="partner-logo" alt="img/partner/family.jpg" title="Security Family" />
				</div>
			</div>
			<div class="col-10 offset-1 col-sm-6 offset-sm-0 col-md-4 col-lg-3 mb-5">
				<div class="item">
					<img src="{{ asset('img/partner/lab.jpg') }}" class="partner-logo" alt="img/partner/lab.jpg" title="Security Lab" />
				</div>
			</div>
			<div class="col-10 offset-1 col-sm-6 offset-sm-0 col-md-4 col-lg-3 mb-5">
				<div class="item">
					<img src="{{ asset('img/partner/i-security.jpg') }}" class="partner-logo" alt="img/partner/i-security.jpg" title="i-Security" />
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Partner end -->
@stop