@extends('layouts.admin_app')

@section('title', 'Dashboard')

@section('content')
	<form action="{{ url('admin/pages/update') }}" method="post" enctype="multipart/form-data" >
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <h3>{{ $page->name }}</h3>

        <label>Titel</label>
        <input name="page_name" value="{{ $page->name }}">
        
        @php $i = 1; @endphp
        @foreach($pageContents as $pageContent)
            <label>{{ 'Text ' . $i }}</label>
            <textarea name="{{ 'text_' . $i }}">{{ $pageContent['text'] }}</textarea>
            @php $i++; @endphp
        @endforeach

        <input type="hidden" name="page_id" value="{{ $page->id }}" />
        <input class="btn-submit mt-3 d-block" type="submit" value="Speichern" />
    </form>
@stop