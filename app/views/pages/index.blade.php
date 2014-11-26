@extends('...layouts.layout')

@section('content')

<div class="starter-template">
    <h1>
        {{ Auth::check() ? "Welcome " . Auth::user()->email : "Why don't you register" }}
    </h1>
    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur assumenda autem corporis distinctio dolore dolorum ducimus excepturi exercitationem, fuga hic impedit incidunt ipsam iure molestias nam nemo neque nisi nostrum numquam perspiciatis possimus praesentium provident quaerat quia quod reprehenderit tempore velit veniam voluptatem voluptatum? Consequatur corporis debitis laudantium maiores numquam.</p>
</div>

@stop