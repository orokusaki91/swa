@extends('layouts.admin_app')

@section('title', 'Dashboard')

@section('content')
	<form action="{{ url('admin/pages/update') }}" method="post" enctype="multipart/form-data" >
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <h3 class="heading">{{ $page->name }}</h3>

        <label class="mr-1">Titel:</label>
        <input name="page_name" value="{{ $page->name }}" />
        
        @php $i = 1; @endphp
        @foreach($pageContents as $pageContent)
            <label class="d-block">{{ 'Text ' . $i }}</label>
            <textarea name="{{ 'text_' . $i }}">{{ $pageContent['text'] }}</textarea>
            @php $i++; @endphp
        @endforeach

        <input type="hidden" name="page_id" value="{{ $page->id }}" />
        <input class="btn-submit" type="submit" value="Speichern" />
    </form>
@stop
