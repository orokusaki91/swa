@extends('layouts.app')

@section('title', 'Impressum')

@section('content')
<div class="container">
	{!! $impressum->text !!}
</div>
@stop
