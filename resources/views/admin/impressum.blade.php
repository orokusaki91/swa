@extends('layouts.admin_app')

@section('title', 'Dashboard')

@section('content')
	<form action="{{ url('admin/pages/update') }}" method="post" enctype="multipart/form-data" >
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        @php 
            $home = $pageContents[0];
        @endphp

        <label>Text</label>
        <textarea name="text_1">{{ $home['text'] }}</textarea>

        <input type="hidden" name="page_id" value="{{ $page->id }}">
        <input type="submit" value="Speichern">
    </form>
@stop
