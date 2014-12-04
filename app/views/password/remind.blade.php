@extends('...layouts.layout')

@section('content')
    <div class="form-container">
    <h1>Reset Password?</h1>

    {{ Form::open() }}
        <!-- Email Form Input -->
        <div class="form-group">
            {{ Form::label('email', 'Email: ') }}
            {{ Form::email('email', null, ['class' => 'form-control']) }}
        </div>

        <div class="form-group">
            {{ Form::submit('Reset', ['class' => 'btn btn-primary']) }}
        </div>
    {{ Form::close() }}

    </div>

@stop