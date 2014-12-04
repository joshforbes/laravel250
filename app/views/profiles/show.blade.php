@extends('...layouts.layout')

@section('content')
<div class="profile-container">
    <h1>{{ $user->username }}</h1>
    <div class="name">
        <h4>Name:</h4>
        <p>
            {{ $user->profile->name }}
        </p>
    </div>

    <div class="email">
        <h4>Email:</h4>
        <p>
            {{ $user->profile->email }}
        </p>
    </div>


    <div class="url">
        <h4>Website:</h4>
        <p>
            @if (isset($user->profile->url))
            {{ link_to('http://' . $user->profile->url, $user->profile->url)  }}
            @endif
        </p>
    </div>


    <div class="company">
        <h4>Company:</h4>
        <p>
            {{ $user->profile->company }}
        </p>
    </div>

    <div class="location">
        <h4>Location:</h4>
        <p>
            {{ $user->profile->location }}
        </p>
    </div>

    @if ($user->isCurrent())
        {{ link_to_route('profile.edit', 'Edit your profile', $user->username, ['class' => 'btn btn-primary']) }}
    @endif

    </div>


@stop