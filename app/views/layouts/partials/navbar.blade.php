<div class="top-bar">
    <a class="brand" href="/">Laravel250</a>
    <div class="account-container">

            @if (Auth::guest())
                <a href="/register"><button class="btn btn-success">Register</button></a>
                <a href="/login"><button class="btn btn-primary">Login</button></a>
            @else
                {{ link_to_route('profile', 'Profile', Auth::user()->username, ['class' => 'btn btn-primary']) }}
                <a href="/logout"><button class="btn btn-danger">Logout</button></a>
            @endif

    </div>
</div>


