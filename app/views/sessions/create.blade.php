@extends('...layouts.layout')

@section('content')
    <div class="form-container">
    <h1>Login</h1>

    {{ Form::open(['route' => 'sessions.store']) }}

    <!-- Email Form Input -->
    <div class="form-group">
        {{ Form::label('email', 'Email: ') }}
        {{ Form::text('email', null, ['class' => 'form-control']) }}
        {{ $errors->first('email', '<span class="error">:message</span>') }}

    </div>

    <!-- Password Form Input -->
    <div class="form-group">
        {{ Form::label('password', 'Password: ') }}
        {{ Form::password('password', ['class' => 'form-control']) }}
        {{ $errors->first('password', '<span class="error">:message</span>') }}

    </div>

    <!--  Submit Button -->
    <div class="form-group">
        {{ Form::submit('Login', ['class' => 'btn btn-primary']) }}
        <a href="/password/remind">Forgot password?</a>
    </div>

    {{ Form::close() }}
    </div>

@stop