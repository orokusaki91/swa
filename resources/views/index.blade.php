@extends('layouts.app')

@section('title', 'Home')

@section('content')
<!-- Home start -->
<div id="home">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h3>Willkommen auf unserer neuen homepage!</h3>
				<p class="m-0">Brauchen Sie Hilfe, oder haben Sie eine Frage zu Ihrer Sicherheit, brauchen Sie Unterstützung sowie eine Sicherheitsberatung oder sogar eine Sicherheitsanalyse?</p>
				<p id="collapse-p" class="collapse m-0"> Dann sind Sie bei uns genau richtig! Seit dem Jahr 2014 bieten wir an der Schoneggstrasse 21 in Spiez Gesamtlösungen im Bereich Sicherheit an. Mit uns und unseren Partner sind Sie rund um die Uhr in sicheren Händen.</p>
				<button class="btn rounded-0 mt-4 mb-5" id="btn-seeAll" data-toggle="collapse" href="#collapse-p" role="button" aria-expanded="false" aria-controls="collapse-p">alles sehen</button>
			</div>
			<div class="col-md-8"></div>
		</div>
	</div>
</div>
<!-- Home end -->
@stop
