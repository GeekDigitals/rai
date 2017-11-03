<div class="form-group form-float{{ $errors->has('image') ? 'has-error' : ''}}">
    <div>
        {!! Form::label('images', 'Image', ['class' => 'form-label', 'style' => 'font-weight: 100; color: #aaa']) !!}
        {!! Form::file('images', null, ['class' => 'form-control']) !!}
    </div>
    {!! $errors->first('image', '<p class="help-block">:message</p>') !!}
</div>
<br>

<div class="form-group form-float{{ $errors->has('title') ? 'has-error' : ''}}">
    <div class="form-line">
        {!! Form::text('title', null, ['class' => 'form-control']) !!}
        {!! Form::label('title', 'Title', ['class' => 'form-label']) !!}
    </div>
    {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
</div>
<br>

<h2 class="card-inside-title" style="margin-top: 10px; font-weight: 100; color: #aaa">Short Description</h2>
<div class="form-group form-float{{ $errors->has('short_description') ? 'has-error' : ''}}">
    <div class="form-line">
        {!! Form::textarea('short_description', null, ['class' => 'form-control', 'id' => 'tinymce']) !!}
    </div>
    {!! $errors->first('short_description', '<p class="help-block">:message</p>') !!}
</div>
<br>

<h2 class="card-inside-title" style="margin-top: 10px; font-weight: 100; color: #aaa">Description</h2>
<div class="form-group form-float{{ $errors->has('description') ? 'has-error' : ''}}">
    <div class="form-line">
        {!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'tinymce']) !!}
    </div>
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
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