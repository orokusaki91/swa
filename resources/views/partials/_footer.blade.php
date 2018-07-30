<!-- Footer start -->
<footer id="footer" class="{{ Route::getCurrentRoute()->uri() == 'kontakt' ? 'contact-footer' : '' }}">
	<div class="container">
		<div class="social text-center">
			<a href="https://www.facebook.com" id="facebook" class="social-icon" title="Facebook"></a>
			<a href="https://www.instagram.com" id="instagram" class="social-icon" title="Instagram"></a>
		</div>
		<div class="links text-center text-uppercase">
			<a href=" {{ url('impresum') }}">Impressum</a>
		</div>
		<div class="copyright text-center">
			Copyright © 2018 <a href="http://mpsoft.ch/" target="_blank" title="MP Soft">MP Soft</a>. All rights reserved.
		</div>
	</div>
</footer>
<!-- Footer end -->
<!-- Back-to-top start -->
<a href="javascript:void(0)" id="back-to-top" title="Back to top"></a>
<!-- Back-to-top end -->

@include('partials._scripts')
@yield('scripts')
