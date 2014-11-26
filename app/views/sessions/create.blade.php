@extends('...layouts.layout')

@section('content')
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
    </div>

    @if (Session::has('flash_message'))
    <div class="form-group">
        <p>{{ Session::get('flash_message') }}</p>
    </div>
    @endif
    {{ Form::close() }}

@stop