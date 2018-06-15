<!-- Footer start -->
<footer id="footer">
	<div class="container">
		<div class="social">
			<a href="https://www.facebook.com" id="facebook" class="social-icon" title="Facebook"></a>
			<a href="https://www.instagram.com" id="instagram" class="social-icon" title="Instagram"></a>
		</div>
		<div class="row text-uppercase links align-items-center">
			<div class="col-md-4 text-md-center my-1 my-md-0">
				<a href=" {{ url('agb') }}">Agb's</a>
			</div>
			<div class="col-md-4 text-md-center my-1 my-md-0">
				<a href=" {{ url('impresum') }}">Impressum</a>
			</div>
			<div class="col-md-4 text-md-center my-1 my-md-0">
				<a href=" {{ url('impresum') }}">Site map</a>
			</div>
		</div>
		<div class="copyright text-center">
			Copyright © 2018 <a href="https://www.webtory.rs" target="_blank" title="Webtory">Webtory</a>. All rights reserved
		</div>
	</div>
</footer>
<!-- Footer end -->
<!-- Back-to-top start -->
<a href="javascript:void(0)" id="back-to-top" title="Back to top"></a>
<!-- Back-to-top end -->

@include('partials._scripts') @yield('scripts')
