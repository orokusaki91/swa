<!-- Footer start -->
<footer id="footer" class="{{ Route::getCurrentRoute()->uri() == 'kontakt' ? 'contact-footer' : '' }}">
	<div class="container">
		<div class="social text-center">
			@foreach($socialMedias as $socialMedia)
				<a href="{{ $socialMedia->url }}" id="{{ $socialMedia->name }}" class="social-icon" title="{{ $socialMedia->name }}" target="_blank"></a>
			@endforeach
		</div>
		<div class="links text-center text-uppercase">
			<a href=" {{ url('impressum') }}" style="font-size: 12px;">Impressum</a>
		</div>
		<div class="copyright text-center">
			Copyright © 2018 <span class="font-weight-bold">S.W.A. Security</span>. Alle Rechte vorbehalten.
		</div>
		<div class="powered-by text-center">
			Powered by <a href="http://mpsoft.ch/" target="_blank" title="MP Soft">MP Soft</a>.
		</div>
	</div>
</footer>
<!-- Footer end -->
@include('partials._scripts')
@yield('scripts')
