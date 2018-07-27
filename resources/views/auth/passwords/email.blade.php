@extends('layouts.app')

@section('content')
<div class="container">
	<div id="reset-password">
    	<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="reset-password-div">
					<div class="panel panel-default">
					
						<h3 class="panel-heading text-center">Reset Password</h3>
						<div class="panel-body">
							@if (session('status'))
								<div class="alert alert-success">
									{{ session('status') }}
								</div>
							@endif

							<form class="form-horizontal" method="POST" action="{{ route('password.email') }}">
								{{ csrf_field() }}

								<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="fas fa-envelope"></i>
											</span>
										</div>
										<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required />
									</div>

									@if ($errors->has('email'))
										<span class="help-block">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
									@endif
								</div>

								<div class="form-group">
									<button type="submit" class="btn btn-primary reset-password">
										Send Password Reset Link
									</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
