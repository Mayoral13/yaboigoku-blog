@include('home.styles')
<body class="homepage">
    <!-- Navbar -->
 @include('home.navbar')
    <!-- End of Navbar -->
    <section class="hero d-flex align-items-center mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="fw-bolder">Bloxithya is a place to write, read and connect</h1>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Mollitia nesciunt repellendus sapiente
                        qui doloremque quae.</p>
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