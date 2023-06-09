<nav class="navbar navbar-expand-lg navbar-light bg-white py-3 fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bolder fs-3" href="/">Yaboigoku</a>
        <button class="navbar-toggler border-0 p-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/all_posts')}}">Posts</a>
                </li>
               
                @if((Route::has('login')))
                @auth
                <li class="nav-item">
                    <a class="nav-link text-primary" href="{{url('logout')}}">Logout</a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link text-primary" href="{{url('register')}}">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-primary" href="{{url('login')}}">Login</a>
                </li>
                @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>