@extends('...layouts.layout')

@section('content')

<div class="form-container">
<h1>edit</h1>

{{ Form::model($user->profile, ['method' => 'PATCH', 'route' => ['profile.update', $user->username]])  }}

<!-- Name Form Input -->
<div class="form-group">
    {{ Form::label('name', 'Name: ') }}
    {{ Form::text('name', null, ['class' => 'form-control']) }}
    {{ $errors->first('name', '<span class="error">:message</span>') }}

</div>

<!-- Email Form Input -->
<div class="form-group">
    {{ Form::label('email', 'Public email: ') }}
    {{ Form::text('email', null, ['class' => 'form-control']) }}
    {{ $errors->first('email', '<span class="error">:message</span>') }}

</div>

<!-- Url Form Input -->
<div class="form-group">
    {{ Form::label('url', 'Website URL: ') }}
    {{ Form::text('url', null, ['class' => 'form-control']) }}
    {{ $errors->first('url', '<span class="error">:message</span>') }}

</div>

<!-- Company Form Input -->
<div class="form-group">
    {{ Form::label('company', 'Company: ') }}
    {{ Form::text('company', null, ['class' => 'form-control']) }}
    {{ $errors->first('company', '<span class="error">:message</span>') }}

</div>

<!-- Location Form Input -->
<div class="form-group">
    {{ Form::label('location', 'Location: ') }}
    {{ Form::text('location', null, ['class' => 'form-control']) }}
    {{ $errors->first('location', '<span class="error">:message</span>') }}

</div>

<div class="form-group">
    {{ Form::submit('Update Profile', ['class' => 'btn btn-primary']) }}
</div>

</div>


{{ Form::close() }}

@stop