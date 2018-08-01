@extends('layouts.app') 

@section('title', 'Kontakt') 

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.19.0/sweetalert2.min.css">
@stop

@section('content')
<!-- Contact start -->
<div id="contact">
	<div class="container">
		<div class="row ">
			<div class="col-sm-10 offset-sm-1 col-md-6 offset-md-0 mb-5">
				<div class="contact wow slideInUp">
					<h3 class="text-center">Informationen</h3>
					<div class="information">
						<p class="key">
							<img src="{{ asset('img/contact/company.png') }}" alt="img/contact/company.png" title="Name" /> Firma:
						</p>
						<p class="value">{{ $user->c_name }}</p>
						<p class="key">
							<img src="{{ asset('img/contact/address.png') }}" alt="img/contact/address.png" title="Adresse" /> Adresse:
						</p>
						<div class="value">
							{!! $user->c_address !!}
						</div>
						<p class="key">
							<img src="{{ asset('img/contact/email.png') }}" alt="img/contact/email.png" title="Email" /> Email:
						</p>
						<p class="value">
							<a href="mailto:{{ $user->c_email }}" target="_blank">
								{{ $user->c_email }}
							</a>
						</p>
						<p class="key">
							<img src="{{ asset('img/contact/telephone.png') }}" alt="img/contact/telephone.png" title="Telefon" /> Telefon:
						</p>
						<p class="value">
							<a href="callto:078 835 36 32" target="_blank">
							{{ $user->c_phone }}
							</a>
						</p>
					</div>
				</div>
			</div>
			<div class="col-sm-10 offset-sm-1 col-md-6 offset-md-0 mb-5">
				<!-- Form start -->
				<form action="{{ url('ajax/contact') }}" method="post" class="wow slideInUp" id="contactForm">
					{{ csrf_field() }}
					<h3 class="text-center">Kontaktieren sie uns</h3>
					<div class="col-sm-10 offset-sm-1 col-md offset-md-0 col-lg-8 offset-lg-2 mb-3">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fas fa-user-circle"></i>
								</span>
							</div>
							<input type="text" class="form-control" placeholder="Name" name="name" />
						</div>
						<span>
                            @if ($errors->has('name'))
                                {{ $errors->first('name') }}
                            @endif
                        </span>
					</div>
					<div class="col-sm-10 offset-sm-1 col-md offset-md-0 col-lg-8 offset-lg-2 mb-3">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fas fa-envelope"></i>
								</span>
							</div>
							<input type="text" class="form-control" placeholder="Email" name="email" />
						</div>
						<span>
                            @if ($errors->has('email'))
                                {{ $errors->first('email') }}
                            @endif
                        </span>
					</div>
					<div class="col-sm-10 offset-sm-1 col-md offset-md-0 col-lg-8 offset-lg-2 mb-3">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fas fa-phone"></i>
								</span>
							</div>
							<input type="text" class="form-control" placeholder="Telefon" name="phone" />
						</div>
						<span>
                            @if ($errors->has('phone'))
                                {{ $errors->first('phone') }}
                            @endif
                        </span>
					</div>
					<div class="col-sm-10 offset-sm-1 col-md offset-md-0 col-lg-8 offset-lg-2 mb-3">
						<div class="input-group">
							<div class="input-group-prepend">
								<span class="input-group-text">
									<i class="fas fa-building"></i>
								</span>
							</div>
							<input type="text" class="form-control" placeholder="Name der Firma" name="company_name" />
						</div>
						<span>
                            @if ($errors->has('company_name'))
                                {{ $errors->first('company_name') }}
                            @endif
                        </span>
					</div>
					<div class="col-sm-10 offset-sm-1 col-md offset-md-0 col-lg-8 offset-lg-2 mb-3">
						<div class="input-group">
							<textarea class="form-control" rows="5" name="message" placeholder="Hinterlasse deine Nachricht..."></textarea>
						</div>
						<span>
                            @if ($errors->has('message'))
                                {{ $errors->first('message') }}
                            @endif
                        </span>
					</div>
					<div class="col-sm-10 offset-sm-1 col-md offset-md-0 col-lg-8 offset-lg-2 text-center">
						<button type="submit" id="btn-submit" class="btn btn-primary">Einreichen</button>
					</div>
				</form>
				<!-- Form start -->
			</div>
		</div>
		<!-- Map start -->
		<div>
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d684.0110125127429!2d7.6844056816418576!3d46.68573949745506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDbCsDQxJzA4LjkiTiA3wrA0MScwMy4zIkU!5e0!3m2!1sen!2srs!4v1531749521403" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<!-- Map end -->
	</div>
</div>
<!-- Contact end -->
@stop

@section('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.19.0/sweetalert2.all.min.js"></script>
<script>
    $(function () {
        $('#contactForm').submit(function (e) {
            e.preventDefault();
            var form = $(this);
            var formData = form.serialize();
            var submitButton = form.find('button');
            submitButton.attr('disabled', true);
            $.ajax({
                url: 'ajax/contact',
                data: formData,
                method: 'post',
                success: function (response) {
                    // empty all previous errors 
                    $('.has-error').removeClass('.has-error').text('');
                    var errors = response.errors;
                    if ($.isEmptyObject(errors)) {
                        location.reload();
                    } else {
                        submitButton.attr('disabled', false);
                        // print the errors
                        $.each(errors, function (key, val) {
                            var input = form.find('[name="'+ key +'"]');
                            input.closest('.input-group').next().addClass('has-error').text(val[0]);
                        });
                    }
                },
                errors: function() {
                    location.reload();
                }
            });
        });

        @if(Session::has('success'))
        swal(
            'Erledigt!',
            '{{ Session::get('success') }}',
            'success'
            );
        @elseif(Session::has('error'))
        swal(
            'Fehler!',
            '{{ Session::get('error') }}',
            'error'
            );
        @endif
    });
</script>
@stop
