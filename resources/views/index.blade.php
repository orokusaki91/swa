@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Home start -->
<div id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h3>Willkommen auf unserer neuen homepage!</h3>
				<p class="m-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
				<p id="collapse-p" class="collapse m-0">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled.</p>
				<button class="btn rounded-0 mt-4 mb-5" id="btn-seeAll" data-toggle="collapse" href="#collapse-p" role="button" aria-expanded="false" aria-controls="collapse-p">alles sehen</button>
			</div>
			<div class="col-md-8"></div>
		</div>
	</div>
</div>
<!-- Home end -->
@stop
