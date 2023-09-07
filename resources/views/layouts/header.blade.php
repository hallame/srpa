<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="#">Luggage Express</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Transport Luggage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Receive Luggage</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                @if (request()->routeIs('home'))
                    <a class="btn btn-primary me-md-2" type="button" href="{{ route('login') }}">Login</a>
                    <a class="btn btn-primary" type="button" href="{{ route('register') }}">Register</a>
                @endif
                @auth
                    <a class="btn btn-primary" type="button" href="{{ route('logout') }}">Logout</a>
                @endauth
        </div>
    </div>
</nav>