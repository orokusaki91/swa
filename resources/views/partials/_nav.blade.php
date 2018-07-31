<!-- Header start -->
<header>
	<div class="container-fluid">
		<div class="social text-right">
			<a href="https://www.facebook.com" id="facebook" class="social-icon" title="Facebook"></a>
			<a href="https://www.instagram.com" id="instagram" class="social-icon" title="Instagram"></a>
		</div>
		<div class="row align-items-center">
			<div class="col-md-6 col-lg-5 px-md-0 px-lg-3 text-md-right text-lg-left">
				<nav class="nav-bar float-md-right float-lg-left">
					<ul class="text-uppercase font-weight-bold text-center">
						<li class="nav-item {{ Request::is('/') ? 'active' : '' }}">
							<a class="nav-link" href="{{ url('/') }}">Home</a>
						</li>
						<li class="nav-item {{ Request::is('über-uns') ? 'active' : '' }}">
							<a class="nav-link" href="{{ url('über-uns') }}">Über uns</a>
						</li>
						<li class="nav-item {{ Request::is('dienstleistungen') ? 'active' : '' }}">
							<a class="nav-link" href="{{ url('dienstleistungen') }}">Dienstleistungen</a>
						</li>
					</ul>
				</nav>
			</div>
			<div class="col-lg-2 order-md-2 text-md-center">
				<a class="logo-link" href="{{ url('/') }}">
					<img src="{{ asset('img/logo.png') }}" class="logo" title="S.W.A. Security" alt="img/logo.png" />
				</a>
			</div>
			<div class="col-md-6 col-lg-5 order-md-1 order-lg-2 text-md-left text-lg-right px-md-0 px-lg-3">
				<nav class="nav-bar float-lg-right">
					<ul class="text-uppercase font-weight-bold">
						<li class="nav-item {{ Request::is('referenzen') ? 'active' : '' }}">
							<a class="nav-link" href="{{ url('referenzen') }}">Referenzen</a>
						</li>
						<li class="nav-item {{ Request::is('partner') ? 'active' : '' }}">
							<a class="nav-link" href="{{ url('partner') }}">Partner</a>
						</li>
						<li class="nav-item {{ Request::is('jobs') ? 'active' : '' }}">
							<a class="nav-link" href="{{ url('jobs') }}">Jobs</a>
						</li>
						<li class="nav-item {{ Request::is('kontakt') ? 'active' : '' }}">
							<a class="nav-link" href="{{ url('kontakt') }}">Kontakt</a>
						</li>
<!--
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<img src="{{ asset('img/flag/de.png') }}" class="language" title="Deutsch" alt="img/flag/de.png" />
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item active" href="#">
									<img src="{{ asset('img/flag/de.png') }}" class="flag" title="Deutsch" alt="img/flag/de.png" />
									Deutsch
								</a>
								<a class="dropdown-item" href="#">
									<img src="{{ asset('img/flag/gb.png') }}" class="flag" title="Englisch" alt="img/flag/gb.png" />
									Englisch
								</a>
							</div>
						</li>
-->
					</ul>
				</nav>
			</div>
		</div>
	</div>
</header>
<!-- Header end -->
