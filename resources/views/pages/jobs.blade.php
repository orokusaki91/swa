@extends('layouts.app')

@section('title', 'Jobs')

@section('content')
<!-- Jobs start -->
<div id="jobs">
	<div class="container">
		<h2 class="text-uppercase text-center">Looking for a job?</h2>
		<p class="text-uppercase text-center place">There's no better place to start</p>
		<div class="text-center">
			<div class="tooltip-div text-center">
				<button id="btn-scroll" class="animated slideInDown infinite">
					<i class="fas fa-chevron-down"></i>
				</button>
				<div class="tooltip-text">Scroll down</div>
			</div>
		</div>
	</div>
	<div class="jobs-background">
		<div class="container">
			<div class="jobs-div">
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
				</p>
				<h2 class="text-center mt-5">Open positions</h2>
				<p>Here you can apply for any of currently open positions.</p>
				<div class="positions">
					<div class="row">
						<div class="col-md-6">
							<h6 class="mt-5">Lorem ipsum (5):</h6>
							<ul>
								<li>
									<a>Lorem Ipsum</a>
								</li>
								<li>
									<a>Lorem Ipsum</a>
								</li>
								<li>
									<a>Lorem Ipsum</a>
								</li>
								<li>
									<a>Lorem Ipsum</a>
								</li>
								<li>
									<a>Lorem Ipsum</a>
								</li>
							</ul>
						</div>
						<div class="col-md-6">
							<h6 class="mt-5">Lorem ipsum (3):</h6>
							<ul>
								<li>
									<a>Lorem Ipsum</a>
								</li>
								<li>
									<a>Lorem Ipsum</a>
								</li>
								<li>
									<a>Lorem Ipsum</a>
								</li>
							</ul>
						</div>
						<div class="col-md-6">
							<h6 class="mt-5">Lorem ipsum (4):</h6>
							<ul>
								<li>
									<a>Lorem Ipsum</a>
								</li>
								<li>
									<a>Lorem Ipsum</a>
								</li>
								<li>
									<a>Lorem Ipsum</a>
								</li>
								<li>
									<a>Lorem Ipsum</a>
								</li>
							</ul>
						</div>
						<div class="col-md-6">
							<h6 class="mt-5">Lorem ipsum (5):</h6>
							<ul>
								<li>
									<a>Lorem Ipsum</a>
								</li>
								<li>
									<a>Lorem Ipsum</a>
								</li>
								<li>
									<a>Lorem Ipsum</a>
								</li>
								<li>
									<a>Lorem Ipsum</a>
								</li>
								<li>
									<a>Lorem Ipsum</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Jobs end -->
@stop
