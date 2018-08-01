@extends('layouts.admin_app')

@section('title', 'Informationen')

@section('content')
	<form action="{{ url('admin/informationen/update') }}" method="post" enctype="multipart/form-data" >
        {{ csrf_field() }}
        {{ method_field('PUT') }}
       
        <h3 class="heading">Informationen</h3>
        
        <label class="mr-1">Firma</label>
        <input name="c_name" value="{{ $user->c_name }}" />

		<label class="d-block">Address</label>
        <textarea name="c_address">{{ $user->c_address }}</textarea>

		<div class="mt-3">
			<label class="mr-1">Email</label>
			<input name="c_email" value="{{ $user->c_email }}" />
		</div>
		<div class="mt-2">
			<label class="mr-1">Phone</label>
			<input name="c_phone" value="{{ $user->c_phone }}" />
		</div>

        <input class="btn-submit d-block" type="submit" value="Speichern" />
    </form>
@stop
