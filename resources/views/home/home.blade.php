@include('home.styles')
<body class="homepage">
    <!-- Navbar -->
 @include('home.navbar')
    <!-- End of Navbar -->
    <section class="hero d-flex align-items-center mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="fw-bolder">Yaboigoku</h1>
                    <p>I'm not lazy, I'm just energy efficient. Why do something in 10 minutes when you can do it in 2 hours?</p>
                        @if(Route::has('login'))
                        @auth
                    <a href="{{url('/create')}}" class="btn btn-outline-dark rounded-pill">Start Writing</a>
                    @endauth
                    @endif
                </div>
            </div>
        </div>
    </section>
    <!-- Posts -->
@include('home.posts')
    <!-- End of Posts -->
    <!-- Footer -->
   @include('home.footer')
    <!-- End of Footer -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
   @include('home.scripts')
</body>

</html>