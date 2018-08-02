@extends('layouts.admin_app')

@section('title', 'Informationen')

@section('content')
	<form action="{{ url('admin/informationen/update') }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
       
        <h3 class="heading">Informationen</h3>
        
        <label class="mr-1">Firma</label>
        <input name="c_name" value="{{ $user->c_name }}" />
		@if ($errors->has('c_name'))
        	<span class="has-error">{{ $errors->first('c_name') }}</span>
    	@endif

		<label class="d-block">Adresse</label>
        <textarea name="c_address">{{ $user->c_address }}</textarea>
       	@if ($errors->has('c_address'))
        	<span class="has-error">{{ $errors->first('c_address') }}</span>
    	@endif

		<div class="mt-3">
			<label class="mr-1">Email</label>
			<input name="c_email" value="{{ $user->c_email }}" />
			@if ($errors->has('c_email'))
	        	<span class="has-error">{{ $errors->first('c_email') }}</span>
	    	@endif
		</div>

		<div class="mt-2">
			<label class="mr-1">Telefon</label>
			<input name="c_phone" value="{{ $user->c_phone }}" />
			@if ($errors->has('c_phone'))
	        	<span class="has-error">{{ $errors->first('c_phone') }}</span>
	    	@endif
		</div>

        <input class="btn-submit d-block" type="submit" value="Speichern" />
    </form>
@stop
