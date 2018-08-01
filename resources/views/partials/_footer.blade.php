<!-- Footer start -->
<footer id="footer" class="{{ Route::getCurrentRoute()->uri() == 'kontakt' ? 'contact-footer' : '' }}">
	<div class="container">
		<div class="social text-center">
			<a href="https://www.facebook.com" id="facebook" class="social-icon" title="Facebook"></a>
			<a href="https://www.instagram.com" id="instagram" class="social-icon" title="Instagram"></a>
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
