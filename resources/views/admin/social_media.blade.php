@extends('layouts.admin_app')

@section('title', 'Soziales Netzwerk')

@section('content')
	<form action="{{ url('admin/soziales-netzwerk/update') }}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}
       
        <h3 class="heading">Soziales Netzwerk</h3>
        
		@foreach($socialMedias as $socialMedia)
			<div class="form-group">
				<label class="mr-1">{{ ucfirst($socialMedia->name) }}</label>
        		<input name="url[{{ $socialMedia->id }}]" value="{{ $socialMedia->url }}" />
        		@if ($errors->has('url.' . $socialMedia->id))
                	<span class="has-error">{{ $errors->first('url.' . $socialMedia->id) }}</span>
            	@endif
			</div>
			
		@endforeach

        <input class="btn-submit d-block" type="submit" value="Speichern" />
    </form>
@stop