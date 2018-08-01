@extends('layouts.admin_app')

@section('title', 'Admin Seite')

@section('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.19.0/sweetalert2.min.css">
@stop

@section('content')

<button class="btn-new"><a href="{{ url('admin/pages/' . $page->slug . '/create') }}">Neue {{ $page->slug }} hinzufügen</a></button>

@php $partners = $pageContents; @endphp
@if($partners->count() > 0)
    <table>
        <thead>
            <tr>
                <th>Bild</th>
                <th>{{ __('app.' . $page->slug) }}</th>
                <th>Webseite</th>
                <th>verwalten</th>
            </tr>
        </thead>
        <tbody>
                @foreach($partners as $key => $partner)
                @php 
                    $image = \App\Image::where('page_content_id', $partner['id'])->value('path');
                 @endphp
                    <tr>
                        <td>
                            <div class="image-tooltip">
                                <img src='{{ asset('storage/uploads/' . $page->slug . '/' . $image) }}'/>
                                <span>
                                    <img src='{{ asset('storage/uploads/' . $page->slug . '/' . $image) }}'/>
                                </span>
                            </div>
                        </td>
                        <td>{{ $partner['title'] }}</td>
                        <td><a href="{{ $partner['text'] }}" target="_blank" class="website">{{ $partner['text'] }}</a></td>
                        <td>
                            <button class="btn btn-primary btn-edit mb-1"><a href="{{ url('admin/pages/' . $page->slug . '/' . $partner['id'] . '/edit') }}">Bearbeiten</a></button>
                            <form action="{{ url('admin/pages/' . $page->slug . '/' . $partner['id'] . '/delete') }}" method="post">
                                {{ csrf_field() }}
                                <button class="btn btn-danger btn-delete mt-1" type="submit" onclick="return confirm('Sind Sie sicher?')">Löschen</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            
        </tbody>
    </table>
@else
    <h2>Sie haben momentan keine {{ ucfirst($page->slug) }} vorhanden.</h2>
@endif
@stop

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.19.0/sweetalert2.all.min.js"></script>
    <script>
        var tooltips = document.querySelectorAll('.image-tooltip span');
        window.onmousemove = function (e) {
            var x = (e.clientX + 20) + 'px',
            y = (e.clientY + 20) + 'px';
            for (var i = 0; i < tooltips.length; i++) {
                tooltips[i].style.top = y;
                tooltips[i].style.left = x;
            }
        };
    </script>
    @if(Session::has('error'))
        <script>
            swal(
            'Fehler!',
            '{{ Session::get('error') }}',
            'error'
            );
        </script>
    @endif
@stop