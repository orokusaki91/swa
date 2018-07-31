@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Home start -->
<div id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div>{!! $home->header_text !!}</div>
				<div id="collapse-p" class="collapse"> {!! $home->text !!}</div>
				<button class="btn rounded-0 mt-4 mb-5" id="btn-seeAll" data-toggle="collapse" href="#collapse-p" role="button" aria-expanded="false" aria-controls="collapse-p">Alles sehen</button>
			</div>
			<div class="col-md-8"></div>
		</div>
	</div>
</div>
<!-- Home end -->
@stop
