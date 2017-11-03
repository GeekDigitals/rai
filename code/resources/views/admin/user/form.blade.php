<div class="form-group form-float{{ $errors->has('name') ? 'has-error' : ''}}">
    <div class="form-line">
        {!! Form::text('name', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! Form::label('name', 'Name', ['class' => 'form-label']) !!}
    </div>
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<br>
<div class="form-group form-float{{ $errors->has('username') ? 'has-error' : ''}}">
    <div class="form-line">
        {!! Form::text('username', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! Form::label('username', 'Username', ['class' => 'form-label']) !!}
    </div>
    {!! $errors->first('username', '<p class="help-block">:message</p>') !!}
</div>
<br>
<div class="form-group form-float{{ $errors->has('email') ? 'has-error' : ''}}">
    <div class="form-line">
        {!! Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! Form::label('email', 'Email', ['class' => 'form-label']) !!}
    </div>
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<br>
<div class="form-group form-float{{ $errors->has('password') ? 'has-error' : ''}}">
    <div class="form-line">
        {!! Form::password('password', ['class' => 'form-control', 'required' => 'required']) !!}
        {!! Form::label('password', 'Password', ['class' => 'form-label']) !!}
    </div>
    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
</div>
<br>
@if(Auth::user()->role ==  \App\User::ROLE_SUPERADMIN)
<div class="form-group form-float{{ $errors->has('role') ? 'has-error' : ''}}">
    <div class="form-line">
        {{ Form::select('role', ['0' => 'Admin', '1' => 'Superadmin'], null,['class' => 'show-tick']) }}
    </div>
    {!! $errors->first('role', '<p class="help-block">:message</p>') !!}
</div>
@endif

<br>
<div class="form-group">
    {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn bg-green waves-effect']) !!}
    <input type="reset" value="Clear" class="btn bg-grey waves-effect">
</div>
