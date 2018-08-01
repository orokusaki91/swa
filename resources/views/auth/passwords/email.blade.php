@extends('layouts.app')

@section('title', 'Passwort zurücksetzen')

@section('content')
<div class="container">
	<div id="reset-email">
    	<div class="row">
			<div class="col-md-6 offset-md-3">
				<div class="reset-email-div">
					<div class="panel panel-default">
					
						<h3 class="panel-heading text-center">Passwort zurücksetzen</h3>
						<div class="panel-body">
							@if (session('status'))
								<div class="alert alert-success">
									Passworterinnerung wurde gesendet! Sie erhalten in Kürze ein neues Passwort.
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
									<button type="submit" class="btn btn-primary reset-email">
										Passwort anfordern
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
