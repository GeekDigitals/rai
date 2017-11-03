
<div class="form-group form-float{{ $errors->has('name') ? 'has-error' : ''}}">
    <div class="form-line">
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
        {!! Form::label('name', 'Name', ['class' => 'form-label']) !!}
    </div>
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<br>

@if(isset($socialmedia->slug) != "")
<div class="form-group form-float{{ $errors->has('slug') ? 'has-error' : ''}}">
    <div class="form-line">
        {!! Form::text('slug', null, ['class' => 'form-control']) !!}
        {!! Form::label('slug', 'Slug', ['class' => 'form-label']) !!}
    </div>
    {!! $errors->first('slug', '<p class="help-block">:message</p>') !!}
</div>
<br>
@endif

<div class="form-group form-float{{ $errors->has('url') ? 'has-error' : ''}}">
    <div class="form-line">
        {!! Form::text('url', null, ['class' => 'form-control']) !!}
        {!! Form::label('url', 'URL', ['class' => 'form-label']) !!}
    </div>
    {!! $errors->first('url', '<p class="help-block">:message</p>') !!}
</div>
<br>


<br>
<div class="form-group">
    {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn bg-green waves-effect']) !!}
    <input type="reset" value="Clear" class="btn bg-grey waves-effect">
</div>

@push('script')
    <script>
        tinymce.init({
            selector: "textarea#tinymce",
            theme: "modern",
            height: 200,
            plugins: [
                'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                'searchreplace wordcount visualblocks visualchars code fullscreen',
                'insertdatetime media nonbreaking save table contextmenu directionality',
                'emoticons template paste textcolor colorpicker textpattern imagetools'
            ],
            toolbar1: 'insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
            toolbar2: 'print preview media | forecolor backcolor emoticons',
            image_advtab: true
        });
        tinymce.suffix = ".min";
        tinyMCE.baseURL = '{{ url('/') }}/plugins/tinymce';
    </script>
@endpush