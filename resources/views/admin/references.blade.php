@extends('layouts.admin_app')

@section('title', 'Dashboard')

@section('content')
	<form action="{{ url('admin/pages/update') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        @php 
            $pageContent = $pageContents[0];
            $images = $page->images;
        @endphp

        <h3>Titelseite</h3>
        <div id="uploaded-ads-image-wrap">
            @if($images->count() > 0)
                @foreach($images as $img)
                    <div class="creating-ads-img-wrap">
                        <img src="{{ asset('storage/uploads/references/' . $img->path) }}" class="ap_pi">
                        <div class="img-action-wrap" id="{{ $img->id }}">
                            <a href="javascript:;" class="imgDeleteBtn"><i class="fa fa-trash"></i> </a>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>

        <div class="col-sm-8 col-sm-offset-4">
            <div class="upload-images-input-wrap">
                <input type="file" id="images" name="images[]" class="custom-input-file"/>
                <label for="images"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg> <span>Datei auswählen&hellip;</span></label>
            </div>

            <div class="image-ad-more-wrap">
                <a href="javascript:;" class="image-add-more"><i class="fa fa-plus-circle"></i> Add More</a>
            </div>
        </div>

        <input type="hidden" name="page_id" value="{{ $page->id }}">
        <input type="submit" value="Speichern">
    </form>
@stop

@section('scripts')
<script>
    $(function () {
        $('body').on('click', '.imgDeleteBtn', function(){
        //Get confirm from user
        if ( ! confirm('Sind Sie sicher?')){
            return '';
        }

        var current_selector = $(this);
        var img_id = $(this).closest('.img-action-wrap').attr('id');
        var page_id = $('input[name="page_id"]').val();
        $.ajax({
            url : '{{ route('delete_image') }}',
            type: "POST",
            data: { media_id : img_id, page_id: page_id, _token : '{{ csrf_token() }}' },
            success : function (data) {
                if (data.success == 1){
                    current_selector.closest('.creating-ads-img-wrap').hide('slow');
                }
            }
        });
    });

    $(document).on('click', '.image-add-more', function (e) {
        e.preventDefault();
            $('.upload-images-input-wrap').first().clone(true).insertAfter($('.upload-images-input-wrap').last());
        });
    });
</script>
@stop
