@extends('layouts.app')

@section('title', 'Jobs')

@section('content')
<!-- Jobs start -->
<div id="jobs">
	<div class="container">
		<h2 class="text-uppercase text-center">Looking for a job?</h2>
		<p class="text-uppercase text-center">There's no better place to start</p>
		<div class="scroll-down text-center">
			<button id="btn-scroll">
				<i class="fas fa-chevron-down"></i>
			</button>
			<div class="tooltip-show">Sroll down</div>
		</div>
	</div>
	<div class="jobs-background">
		<div class="container">
			<div class="jobs-div">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
				<h4>Open positions</h4>
			</div>
		</div>
	</div>
</div>
<!-- Jobs end -->
@stop
