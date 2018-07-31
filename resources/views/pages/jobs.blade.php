@extends('layouts.app') @section('title', 'Jobs') @section('content')
<!-- Jobs start -->
<div id="jobs">
	<div class="container">
		<h2 class="text-uppercase text-center wow slideInLeft">{!! $job->header_text !!}</h2>
		<div class="text-center">
			<div class="tooltip-div text-center">
				<button id="btn-scroll">
					<i class="fas fa-chevron-down"></i>
				</button>
				<div class="tooltip-text">Runterscrollen</div>
			</div>
		</div>
	</div>
	<div class="jobs-background">
		<div class="container">
			<div class="jobs-div">{!! $job->text !!}</div>
		</div>
	</div>
</div>
<!-- Jobs end -->
@stop
