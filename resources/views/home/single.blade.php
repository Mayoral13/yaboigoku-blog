@include('home.styles')

<body>
    <!-- Navbar -->
   @include('home.navbar')
    <!-- End of Navbar -->
    <!-- Single Post -->
   @include('home.single_post')
    <!-- End of Single Post -->
    <!-- Footer -->
  @include('home.footer')
    <!-- End of Footer -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
   
    <script>
        function readingTime() {
            const postContent = document.getElementById('content').innerText
            const wpm = 225;
            const words = postContent.trim().split(/\s+/).length
            const time = Math.ceil(words / wpm)
            document.getElementById('read-time').innerText = time
        }

        readingTime()
    </script>
   @include('home.scripts');
</body>

</html>