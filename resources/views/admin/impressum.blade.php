@extends('layouts.admin_app')

@section('title', 'Dashboard')

@section('content')
	<form action="{{ url('admin/pages/update') }}" method="post" enctype="multipart/form-data" >
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        @php 
            $pageContent = $pageContents[0];
        @endphp

        <label class="d-block">Text</label>
        <textarea name="text_1">{{ $pageContent['text'] }}</textarea>

        <input type="hidden" name="page_id" value="{{ $page->id }}" />
        <input class="btn-submit" type="submit" value="Speichern" />
    </form>
@stop
