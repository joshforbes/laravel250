@extends('...layouts.layout')

@section('content')
    <div class="form-container">
    <h1>Set your new password</h1>

    {{ Form::open() }}
        <input type="hidden" name="token" value="{{ $token }}"/>
        
        <!-- Email Form Input -->
        <div class="form-group">
            {{ Form::label('email', 'Email: ') }}
            {{ Form::email('email', null, ['class' => 'form-control', 'required' => 'required']) }}
        </div>

        <!-- Password Form Input -->
        <div class="form-group">
            {{ Form::label('password', 'Password: ') }}
            {{ Form::password('password', ['class' => 'form-control', 'required' => 'required']) }}
        </div>

        <!-- Password Form Input -->
        <div class="form-group">
            {{ Form::label('password_confirmation', 'Confirm Password: ') }}
            {{ Form::password('password_confirmation', ['class' => 'form-control', 'required' => 'required']) }}
        </div>

        <div class="form-group">
            {{ Form::submit('Reset', ['class' => 'btn btn-primary']) }}
        </div>

    {{ Form::close() }}


    </div>

@stop