@extends('layouts.app')

@section('title', 'Login')

@section('content')
<div class="container">
	<div id="login">
    	<div class="row">
        	<div class="col-md-6 offset-md-3">
				<div class="login-div">
					<div class="panel panel-default">

						<h3 class="panel-heading text-center">Login</h3>
						<div class="panel-body">
							<form class="form-horizontal" method="POST" action="{{ route('login') }}">
								{{ csrf_field() }}

								<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
									<div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="fas fa-envelope"></i>
											</span>
										</div>
										<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required autofocus />
									</div>

									@if ($errors->has('email'))
										<span class="help-block">
											<strong>{{ $errors->first('email') }}</strong>
										</span>
									@endif
								</div>

								<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
									
									<div class="input-group password">
										<div class="input-group-prepend">
											<span class="input-group-text">
												<i class="fas fa-lock"></i>
											</span>
										</div>
										<input id="password" type="password" class="form-control" name="password" placeholder="Passwort" required />
									</div>

									@if ($errors->has('password'))
										<span class="help-block">
											<strong>{{ $errors->first('password') }}</strong>
										</span>
									@endif
								</div>

								<div class="form-group remember">
									<div class="checkbox">
										<label>
											<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Logindaten merken
										</label>
									</div>
								</div>
								<div class="forgot-password text-md-center">
									<a class="btn btn-link" href="{{ route('password.request') }}">
										Passwort vergessen?
									</a>
								</div>
								<button type="submit" class="btn btn-primary login">Login</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
