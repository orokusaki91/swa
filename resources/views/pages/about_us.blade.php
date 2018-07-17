@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<!-- About us start -->
<div id="about-us">
	<div class="container">
		<p class="mb-5">Die Geschichte und die umfassende Kompetenz der SWA Security GmbH in Bewachungs-, Ordnungs- und Sicherheitsaufgaben gründen auf einer 10jährigen Tradition auf dem Gebiet der Sicherheitsdienstleistungen. Als aktives Mitglied im Verband Schweizerischer Sicherheitsdienstleistungs-Unternehmen VSSU setzt die SWA Security GmbH sehr viel in die Aus- und Weiterbildung der Mitarbeiter.</p>
		<div id="carousel" class="carousel slide px-0 col-md-10 offset-md-1 mb-5" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel" data-slide-to="0" class="active"></li>
				<li data-target="#carousel" data-slide-to="1"></li>
				<li data-target="#carousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="{{ asset('img/carousel/carousel-1.jpg') }}" alt="First slide">
					<div class="carousel-caption d-none d-md-block">
						<h5>S.W.A. Security</h5>
						<p>Lorem Ipsum</p>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="{{ asset('img/carousel/carousel-2.jpg') }}" alt="Second slide">
					<div class="carousel-caption d-none d-md-block">
						<h5>S.W.A. Security</h5>
						<p>Lorem Ipsum</p>
					</div>
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="{{ asset('img/carousel/carousel-3.jpg') }}" alt="Third slide">
					<div class="carousel-caption d-none d-md-block">
						<h5>S.W.A. Security</h5>
						<p>Lorem Ipsum</p>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
				<i class="fas fa-chevron-left"></i>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
				<i class="fas fa-chevron-right"></i>
				<span class="sr-only">Next</span>
			</a>
		</div>
<!--
		<div class="row">
			<div class="col-md-6 mb-5">
				<div class="item">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
			</div>
			<div class="col-md-6 mb-5">
				<div class="item">
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
				</div>
			</div>
		</div>
-->
	</div>
</div>
<!-- About us end -->
@stop
