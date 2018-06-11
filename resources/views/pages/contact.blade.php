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
						<img src="{{ asset('img/contact/company.png') }}" alt="img/contact/company.png" title="Company" />
						Name:
					</p>
					<p class="value">Lorem ipsum</p>
					<p class="key">
						<img src="{{ asset('img/contact/address.png') }}" alt="img/contact/address.png" title="Company" />
						Address:
					</p>
					<p class="value">Lorem ipsum</p>
					<p class="key">
						<img src="{{ asset('img/contact/email.png') }}" alt="img/contact/email.png" title="Company" />
						Email:</p>
					<p class="value">Lorem ipsum</p>
					<p class="key">
						<img src="{{ asset('img/contact/telephone.png') }}" alt="img/contact/telephone.png" title="Company" />
						Telephone:
					</p>
					<p class="value">Lorem ipsum</p>
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
	<div id="map" class="mb-5"></div>
	<!-- Map end -->
</div>
<!-- Contact end -->
@stop
