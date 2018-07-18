@extends('layouts.app')

@section('title', 'Contact')

@section('content')
<!-- Contact start -->
<div id="contact">
	<div class="container">
		<div class="row">
			<div class="col-sm-10 offset-sm-1 col-md-6 offset-md-0 mb-5">
				<div class="contact">
					<p class="key">
						<img src="{{ asset('img/contact/company.png') }}" alt="img/contact/company.png" title="Name" /> Name:
					</p>
					<p class="value">SWA Security GmbH</p>
					<p class="key">
						<img src="{{ asset('img/contact/address.png') }}" alt="img/contact/address.png" title="Adresse" /> Adresse:
					</p>
					<p class="value">Postfach 329,
						<br />Schonegsstrasse 21,
						<br />3700 Spiez
					</p>
					<p class="key">
						<img src="{{ asset('img/contact/email.png') }}" alt="img/contact/email.png" title="Email" /> Email:
					</p>
					<p class="value">
						<a href="mailto:info@swasecurity.ch" target="_blank">
							info@swasecurity.ch
						</a>
					</p>
					<p class="key">
						<img src="{{ asset('img/contact/telephone.png') }}" alt="img/contact/telephone.png" title="Telefon" /> Telefon:
					</p>
					<p class="value">
						<a href="callto:078 835 36 32" target="_blank">
							078 835 36 32
						</a>
					</p>
				</div>
			</div>
			<div class="col-sm-10 offset-sm-1 col-md-6 offset-md-0 mb-5">
				<!-- Form start -->
				<form action="">
					<h3 class="text-center">Contact us</h3>
					<div class="col-sm-10 offset-sm-1 col-md offset-md-0 col-lg-8 offset-lg-2 mb-3">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fas fa-user-circle"></i>
								</span>
							</div>
							<input type="text" class="form-control" placeholder="Name" required />
						</div>
					</div>
					<div class="col-sm-10 offset-sm-1 col-md offset-md-0 col-lg-8 offset-lg-2 mb-3">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fas fa-envelope"></i>
								</span>
							</div>
							<input type="text" class="form-control" placeholder="Email" required />
						</div>
					</div>
					<div class="col-sm-10 offset-sm-1 col-md offset-md-0 col-lg-8 offset-lg-2 mb-3">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fas fa-phone"></i>
								</span>
							</div>
							<input type="text" class="form-control" placeholder="Telephone" required />
						</div>
					</div>
					<div class="col-sm-10 offset-sm-1 col-md offset-md-0 col-lg-8 offset-lg-2 mb-3">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fas fa-building"></i>
								</span>
							</div>
							<input type="text" class="form-control" placeholder="Company name" required />
						</div>
					</div>
					<div class="col-sm-10 offset-sm-1 col-md offset-md-0 col-lg-8 offset-lg-2 mb-3">
						<div class="form-group">
							<textarea class="form-control" rows="5" placeholder="Leave your message..."></textarea>
						</div>
					</div>
					<div class="col-sm-10 offset-sm-1 col-md offset-md-0 col-lg-8 offset-lg-2 mb-3 text-center">
						<button type="submit" id="btn-submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
				<!-- Form start -->
			</div>
		</div>
	</div>
	<!-- Map start -->
	<div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d684.0110125127429!2d7.6844056816418576!3d46.68573949745506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDbCsDQxJzA4LjkiTiA3wrA0MScwMy4zIkU!5e0!3m2!1sen!2srs!4v1531749521403" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
	<!-- Map end -->
</div>
<!-- Contact end -->
@stop
