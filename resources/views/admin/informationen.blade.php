@extends('layouts.admin_app')

@section('title', 'Dashboard')

@section('content')
	<form action="{{ url('admin/informationen/update') }}" method="post" enctype="multipart/form-data" >
        {{ csrf_field() }}
        {{ method_field('PUT') }}
       
        <h3>Informationen</h3>
        
        <label>Name</label>
        <input name="c_name" value="{{ $user->c_name }}">

		<label>Address</label>
        <textarea name="c_address">{{ $user->c_address }}</textarea>

        <label>Email</label>
        <input name="c_email" value="{{ $user->c_email }}">

        <label>Phone</label>
        <input name="c_phone" value="{{ $user->c_phone }}">

        <input type="submit" value="Speichern">
    </form>
@stop
