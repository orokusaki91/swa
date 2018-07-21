@extends('layouts.app')

@section('title', 'Services')

@section('content')
<!-- Services start -->
<div id="services">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-lg-4 mb-5">
				<div class="item wow slideInUp">
					<div class="icon text-center">
						<img src="{{ asset('img/icon/guard.png') }}" title="Bewachung" alt="img/icon/guard.png" />
					</div>
					<h3 class="text-center">
						<a href="{{ url('guarding') }}" target="_blank">Bewachung</a>
					</h3>
					<p class="service-text">Der Bedarf an temporären Bewachungsdienstleistungen ist vielfältig: Für Infrastrukturen im Freien, beim Auf- und Abbau von Ausstellungsständen oder beim Defekt des Schliesssystems in einem Eingangsbereich, bedeutet eine Objektbewachung garantierte Sicherheit, bis die eigenen Mitarbeitenden wieder zum Rechten schauen oder technische Dienste eintreffen. Um solche Aufgaben zu lösen, ist die SWA Security GmbH flexibel und organisiert. Bei Bedarf sind wir mit Pikettkräften schnell vor Ort und gewährleisten umfassenden Schutz für die erforderliche Zeitdauer.</p>
					<div class="text-center">
						<a class="btn btn-readMore" href="{{ url('guarding') }}" role="button" target="_blank">Alles sehen</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 mb-5">
				<div class="item wow slideInUp">
					<div class="icon text-center">
						<img src="{{ asset('img/icon/order.png') }}" title="Ordnung" alt="img/icon/order.png" />
					</div>
					<h3 class="text-center">
						<a href="{{ url('order') }}" target="_blank">Ordnung</a>
					</h3>
					<p class="service-text">Wir, die Firma SWA Security GmbH, sorgen Tag und Nacht für Ruhe und Ordnung. Dank markanter Präsenz in Parkhäusern, in Einkaufszonen, auf Bahnhofarealen, Parkanlagen, Klein- und Grossveranstaltungen, in Quartieren oder auf Schulhöfen ist die Sicherheit gewährleistet. Wenn aktives Eingreifen notwendig wird, geschieht dies im Rahmen der Gesetze (z.B. als Notwehr oder Notwehrhilfe). Vielfach können gefährliche Situationen mit psychologisch und taktisch richtigem Auftreten entschärft werden. Menschen in Gefahren oder in Notlagen wird kompromisslos geholfen. Wir sorgen nicht nur für Recht und Ordnung, sondern helfen auch Passanten für Touristische Informationen.</p>
					<div class="text-center">
						<a class="btn btn-readMore" href="{{ url('order') }}" role="button" target="_blank">Alles sehen</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 mb-5">
				<div class="item wow slideInUp">
					<div class="icon text-center">
						<img src="{{ asset('img/icon/protection.png') }}" title="Schutz" alt="img/icon/protection.png" />
					</div>
					<h3 class="text-center">
						<a href="{{ url('protection') }}" target="_blank">Schutz</a>
					</h3>
					<p id="service-text" class="service-text">Nicht jedermann ist geeignet um Personenschutzaufgaben zu verrichten. Nur eigens dafür ausgebildete Mitarbeiter kommen für diese verantwortungsvolle Aufgabe in Frage. Eine gute Allgemeinbildung, gepflegtes Äusseres, psychisch und physisch belastbar, Sprachkenntnisse und sicheres Auftreten, sind Grundvoraussetzungen um für diesen Dienst aufgestellt zu werden.</p>
					<div class="text-center">
						<a class="btn btn-readMore" href="{{ url('protection') }}" role="button" target="_blank">Alles sehen</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 mb-5">
				<div class="item wow slideInUp">
					<div class="icon text-center">
						<img src="{{ asset('img/icon/ocassion.png') }}" title="Anlass" alt="img/icon/ocassion.png" />
					</div>
					<h3 class="text-center">
						<a href="{{ url('ocassion') }}" target="_blank">Anlass</a>
					</h3>
					<p class="service-text">Damit Ihr Event ein positives und einmaliges Erlebnis für Ihre Gäste und Besucher wird, sorgt unser Aufsichtsdienst für Sicherheit und einen reibungslosen Ablauf. Unsere Aufsichtsdienstspezialisten zeigen Präsenz und behalten die Geschehnisse im Blick. Sie sorgen für ein korrektes Verhalten der Besucher und greifen bei Konfliktsituationen oder gewalttätigen Auseinandersetzungen ein. Bei einem Notfall wird interveniert und falls nötig evakuiert, um die Sicherheit aller Besucher und Teilnehmer sicherzustellen.</p>
					<div class="text-center">
						<a class="btn btn-readMore" href="{{ url('ocassion') }}" role="button" target="_blank">Alles sehen</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-lg-4 mb-5">
				<div class="item wow slideInUp">
					<div class="icon text-center">
						<img src="{{ asset('img/icon/traffic.png') }}" title="Anlass" alt="img/icon/traffic.png" />
					</div>
					<h3 class="text-center">
						<a href="{{ url('traffic') }}" target="_blank">Verkehr</a>
					</h3>
					<p class="service-text">Temporäre Umleitungen, Baustellen, Klein- und Grossveranstaltungen hindern den Verkehrsfluss und überlasten Zufahrtsstrassen und den laufenden Verkehr. Die Geduld von Automobilisten und Anwohnern wird durch diese stressige Zeit nicht selten auf die Probe gestellt. Um Stau, Lärm und Ärger zu vermeiden, stellen wir Ihnen rund um die Uhr erfahrene Verkehrsmitarbeiter zu Ihrer und der Sicherheit Ihrer Mitmenschen zur Verfügung.</p>
					<div class="text-center">
						<a class="btn btn-readMore" href="{{ url('traffic') }}" role="button" target="_blank">Alles sehen</a>
					</div>
				</div>
			</div>
		</div>
		<!--
		<div class="col-md-6 col-lg-4 mb-5">
			<div class="item">
				<div class="icon text-center">
					<img src="{{ asset('img/icon/traffic.png') }}" title="Anlass" alt="img/icon/traffic.png" />
					<i class="fas fa-wrench"></i>
				</div>
				<h3 class="text-center">
					<a href="{{ url('traffic') }}" target="_blank">Verkehr</a>
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
