@extends('layouts.app') @section('title', 'Dienstleistungen') @section('content')
<!-- Services start -->
<div id="services">
	<div class="container">
		<div class="row">
			@foreach(App\Page::where('has_nav', 0)->get() as $service)
				<div class="col-md-6 col-lg-4 mb-5">
				<div class="item wow slideInUp">
					<div class="icon text-center">
						<img src="{{ asset('img/icon/guard.png') }}" title="{{ $service->name }}" alt="img/icon/guard.png" />
					</div>
					<h3 class="text-center">
						<a href="{{ url($service->slug) }}">{{ $service->name }}</a>
					</h3>
					<p class="service-text">Der Bedarf an temporären Bewachungsdienstleistungen ist vielfältig: Für Infrastrukturen im Freien, beim Auf- und Abbau von Ausstellungsständen oder beim Defekt des Schliesssystems in einem Eingangsbereich, bedeutet eine Objektbewachung garantierte Sicherheit, bis die eigenen Mitarbeitenden wieder zum Rechten schauen oder technische Dienste eintreffen. Um solche Aufgaben zu lösen, ist die SWA Security GmbH flexibel und organisiert. Bei Bedarf sind wir mit Pikettkräften schnell vor Ort und gewährleisten umfassenden Schutz für die erforderliche Zeitdauer.</p>
					<a class="btn btn-readMore" href="{{ url($service->slug) }}" role="button">Alles sehen</a>
				</div>
			</div>
			@endforeach
		</div>
		<!--
		<div class="col-md-6 col-lg-4 mb-5">
			<div class="item">
				<div class="icon text-center">
					<img src="{{ asset('img/icon/traffic.png') }}" title="Anlass" alt="img/icon/traffic.png" />
					<i class="fas fa-wrench"></i>
				</div>
				<h3 class="text-center">
					<a href="{{ url('traffic') }}">Verkehr</a>
				</h3>
				<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				<p id="service-5" class="collapse">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
				<div class="text-center">
					<button class="btn mt-4" data-toggle="collapse" href="#service-5" role="button" aria-expanded="false" aria-controls="service-5">alles sehen</button>
				</div>
			</div>
		</div>
-->
	</div>
</div>
<!-- Services end -->
@stop
