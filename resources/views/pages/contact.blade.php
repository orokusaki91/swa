@extends('layouts.app') 

@section('title', 'Contact')

@section('content')
<div class="container">
	<div id="contact">
		<div class="row">
			<div class="col-md-6 offset-md-3">
				<form action="">
					<h3 class="text-center">Contact us</h3>
					<div class="col-md-8 offset-md-2 mb-3">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fas fa-user-circle"></i>
								</span>
							</div>
							<input type="text" class="form-control" placeholder="Name" required />
						</div>
					</div>
					<div class="col-md-8 offset-md-2 mb-3">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fas fa-envelope"></i>
								</span>
							</div>
							<input type="text" class="form-control" placeholder="Email" required />
						</div>
					</div>
					<div class="col-md-8 offset-md-2 mb-3">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fas fa-phone"></i>
								</span>
							</div>
							<input type="text" class="form-control" placeholder="Telephone" required />
						</div>
					</div>
					<div class="col-md-8 offset-md-2 mb-3">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fas fa-building"></i>
								</span>
							</div>
							<input type="text" class="form-control" placeholder="Company name" required />
						</div>
					</div>
					<div class="col-md-8 offset-md-2 mb-3">
						<div class="form-group">
							<textarea class="form-control" rows="5" placeholder="Leave your message..."></textarea>
						</div>
					</div>
					<div class="col-md-8 offset-md-2 text-center">
						<button type="submit" id="btn-submit" class="btn btn-primary">Submit</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
@stop