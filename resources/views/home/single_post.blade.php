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
                                    <a href="#" class="writer-name fw-bolder">{{ $post->username }}</a>
                                </div>
                                <a role="button" data-bs-toggle="tooltip" data-bs-placement="top" title="Save"><i
                                        class="bi bi-bookmark"></i></a>
                            </div>
                            <div class="img-container">
                                <a href="#">
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
                    <!-- Comment Form (If user was login) -->
                    <!-- <form action="" class="mb-4">
                    <div class="mb-3">
                        <label class="form-label" for="comment">Comment</label>
                        <textarea name="" class="form-control" id="comment" cols="30" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-dark">Submit</button>
                </form> -->

                    <!-- End of Comment Form -->
                    <br><br>
                    <a href="" class="btn btn-outline-dark rounded-pill mb-4 d-block">You must login
                        first to
                        comment</a>
                    <!-- Comments -->
                    <div class="comments mb-5">
                        <h4 class="fw-bolder mb-4">4 Comments</h4>
                        <!-- REPLY--->
                        <div class="d-flex mb-4">
                            <img src="{{ asset('home/assets/img/avatar-3.jpg') }}" alt="Johnny Alexander"
                                class="rounded-circle me-3 img-commentator">
                            <div class="flex-column">
                                <span class="d-block">
                                    <a href="" class="text-dark">Johnny Alexander</a> &bullet; 2 days ago
                                </span>
                                <small class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing
                                    elit.</small>
                                <a href="" class="d-block">
                                    <small>Reply</small>
                                </a>
                            </div>
                        </div>
                        <div class="d-flex replier mb-4">
                            <img src="{{ asset('home/assets/img/avatar-4.jpg') }}" alt="Christine Gibson"
                                class="rounded-circle me-3 img-commentator">
                            <div class="flex-column">
                                <span class="d-block">
                                    <a href="" class="text-dark">Christine Gibson</a> <i
                                        class="bi bi-patch-check-fill text-primary"></i>
                                    &bullet; 2 days
                                    ago
                                </span>
                                <small class="text-secondary">Lorem ipsum dolor sit amet consectetur
                                    adipisicing
                                    elit.
                                </small>
                            </div>
                        </div>
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
                                            <a href="#">
                                                <img src="/product/{{ $post->image }}" alt="Post 4"
                                                    class="mb-3 rounded-3" height="180px">
                                            </a>
                                            <span class="post-tag">{{ $post->category }}</span>
                                        </div>
                                        <a href="/get_post/{{$post->id }}"
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
