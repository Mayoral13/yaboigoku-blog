<section class="single-post mb-4">
    <div class="container">
        <div class="row mb-4">
            <div class="container w-50">

                <div class="col-14">
                    <div class="card custom-card post p-2">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div class="writer d-flex align-items-center mb-3">
                                    <img src="{{ asset('home/assets/img/avatar-1.jpg') }}"
                                        class="img-writer rounded-circle me-2" alt="{{ $post->username }}">
                                    <a href="javascript:void(0)" class="writer-name fw-bolder">{{ $post->username }}</a>
                                </div>
                                <a role="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Save"><i
                                        class="bi bi-bookmark"></i></a>
                            </div>
                            <div class="img-container">
                                <a href="javascript:void(0)">
                                    <img src="/product/{{ $post->image }}" alt="Post 4" class="mb-3 rounded-3"
                                        height="350px">
                                </a>
                        
                            </div>
                            <a href="/get_post/{{ $post->id }}"
                                class="fs-6 d-block text-dark fw-bolder">{{ $post->title }}</a>
                            <small class="text-secondary">{{ $post->created_at }}</small>

                            <br><br>
                            
                           
                        </div>

                    </div>
                   
                  <form action="{{url('/comment/{id}')}}" class="mb-4" method = "POST" id = "comment" style = "display:none">
                    @csrf
                    <div class="mb-3">
                        <input type="hidden" name="postid" value = "{{$post->id}}">
                        <label class="form-label" for="comment">Comment</label>
                        <textarea name="comment" class="form-control" id="comment" cols="30" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-dark">Submit</button>
                  </form>

              
               
                    <!-- End of Comment Form -->
                    <br><br>
                   @if(Route::has('login'))
                   @auth
                    <a href="javascript:void(0);" onclick = "comment()"class="btn btn-outline-dark rounded-pill mb-4 d-block">Click to Comment</a>
                   
                   
                   @else
                    <a href="{{url('register')}}"class="btn btn-outline-dark rounded-pill mb-4 d-block">Login to Comment</a>
                    @endauth
                    @endif

                    <script>
                        function comment() {
                               var x = document.getElementById("comment");
                               if (x.style.display === "none") {
                                 x.style.display = "block";
                               } else {
                                 x.style.display = "none";
                               }
                             }
                           </script>
                    <!-- Comments -->
                   
                    <div class="comments mb-5">
                        <h4 class="fw-bolder mb-4">Comment: {{$comment_count}}</h4>
                        <!-- REPLY--->
                        @foreach($comments as $comment)
                        <div class="d-flex mb-4">
                            <img src="{{ asset('home/assets/img/avatar-3.jpg') }}" alt="{{$comment->username}}"
                                class="rounded-circle me-3 img-commentator">
                            <div class="flex-column">
                                <span class="d-block">
                                    <a href="javascript:void(0)" class="text-dark">{{$comment->username}}</a> &bullet;{{($comment->created_at)}}
                                </span>

                                <small class="text-secondary">{{$comment->comment}}</small>
            
                            </div>
                        </div>

                        @endforeach
                      
                        
                        
                   

                           
                    </div>
                        <!-- REPLIER--->
                      

                </div>
                    <!-- End of Comments -->
                </div>
                <!-- Sidebar -->
                <div class="col-lg-4">

                    <h4 class="fw-bolder mb-4">Other Posts</h4>
                    <div class="row">
                        <!-- OTHER POSTS--->
                        @foreach ($posts as $post)
                            <div class="col-md-6 col-lg-12 mb-3">
                                <div class="card custom-card post p-2">
                                    <div class="card-body">
                                        <div class="d-flex justify-content-between">
                                            <div class="writer d-flex align-items-center mb-3">
                                                <img src="{{ asset('home/assets/img/avatar-1.jpg') }}"
                                                    class="img-writer rounded-circle me-2"
                                                    alt="{{ $post->username }}">
                                                <a href="/get_post/{{$post->id }}"
                                                    class="writer-name fw-bolder">{{ $post->username }}</a>
                                            </div>
                                            <a role="button" data-bs-toggle="tooltip"
                                                data-bs-placement="top" title="Save"><i
                                                    class="bi bi-bookmark"></i></a>
                                        </div>
                                        <div class="img-container">
                                            <a href="/get_post/{{$post->id}}">
                                                <img src="/product/{{ $post->image }}" alt="Post 4"
                                                    class="mb-3 rounded-3" height="180px">
                                            </a>
                                            <span class="post-tag">{{ $post->category }}</span>
                                        </div>
                                        <a href="/get_post/{{$post->id}}"
                                            class="fs-6 d-block text-dark fw-bolder">{{ $post->title }}</a>
                                        <small class="text-secondary">{{ $post->created_at }}</small>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        {!! $posts->withQueryString()->links('pagination::bootstrap-5') !!}
                        <!-- OTHER POSTS END-->


                    </div>
                </div>
                <!-- End of Sidebar -->
            </div>
        </div>
    </div>

</section>
