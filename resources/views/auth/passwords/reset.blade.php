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
							<form class="form-horizontal" method="POST" action="{{ route('password.request') }}">
								{{ csrf_field() }}

								<input type="hidden" name="token" value="{{ $token }}" />

								<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="fas fa-envelope"></i>
											</span>
										</div>						<input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" placeholder="Email" required autofocus />
									</div>

									@if ($errors->has('email'))
										<span class="help-block">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
									@endif
								</div>

								<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="fas fa-envelope"></i>
											</span>
										</div>
										
										<input id="password" type="password" class="form-control" name="password" placeholder="Password" required />
									</div>

									@if ($errors->has('password'))
										<span class="help-block">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
									@endif
								</div>

								<div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="fas fa-envelope"></i>
											</span>
										</div>
										<input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" required />
									</div>

									@if ($errors->has('password_confirmation'))
										<span class="help-block">
											<strong>{{ $errors->first('password_confirmation') }}</strong>
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
