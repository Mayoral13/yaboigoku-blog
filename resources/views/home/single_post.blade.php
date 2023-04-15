<section class="single-post mb-4">
    <div class="container">
        <div class="row mb-4">
            <div class="col-lg-8">
                <h1 class="fw-bolder mb-4">17 Inspiring Examples of Beautiful Blog Homepage Design</h1>
                <div class="d-flex align-items-center mb-4">
                    <img src="{{asset('home/assets/img/avatar-1.jpg')}}"  alt="John Doe" class="img-writer rounded-circle me-3">
                    <div class="flex-column">
                        <a href="" class="d-block text-dark">John Doe</a>
                        <small class="text-secondary">June 26, 2021 &bullet; <span id="read-time"></span> min
                            read &bullet; <a href="">Design</a></small>
                    </div>
                </div>
                <img src="{{asset('home/assets/img/post-1.jpg')}}"  alt="Post 1" class="rounded-3 mb-4 img-post">
                <div id="content" class="mb-4">
                    <p>POST 1</p>
                </div>
                <h4 class="fw-bolder mb-3">Share</h4>
                <ul class="list-unstyled d-flex mb-5 fs-3" id="share-buttons">
                    <li>
                        <a href="#" class="text-dark" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            title="Facebook">
                            <i class="me-4 bi bi-facebook"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-dark" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            title="Instagram">
                            <i class="me-4 bi bi-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-dark" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            title="Whatsapp">
                            <i class="me-4 bi bi-whatsapp"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-dark" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            title="Twitter">
                            <i class="me-4 bi bi-twitter"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="text-dark" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            title="Copy to Clipboard">
                            <i class="me-4 bi bi-clipboard"></i>
                        </a>
                    </li>
                </ul>
                <!-- Comment Form (If user was login) -->
                <!-- <form action="" class="mb-4">
                    <div class="mb-3">
                        <label class="form-label" for="comment">Comment</label>
                        <textarea name="" class="form-control" id="comment" cols="30" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-outline-dark">Submit</button>
                </form> -->
                <!-- End of Comment Form -->
                <a href="" class="btn btn-outline-dark rounded-pill mb-4 d-block">You must login first to
                    comment</a>
                <!-- Comments -->
                <div class="comments mb-5">
                    <h4 class="fw-bolder mb-4">4 Comments</h4>
                    <!-- REPLY--->
                    <div class="d-flex mb-4">
                        <img src="{{asset('home/assets/img/avatar-3.jpg')}}"  alt="Johnny Alexander"
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
                    <!-- REPLIER--->
                    <div class="d-flex replier mb-4">
                        <img src="{{asset('home/assets/img/avatar-4.jpg')}}"  alt="Christine Gibson"
                            class="rounded-circle me-3 img-commentator">
                        <div class="flex-column">
                            <span class="d-block">
                                <a href="" class="text-dark">Christine Gibson</a> <i
                                    class="bi bi-patch-check-fill text-primary"></i>
                                &bullet; 2 days
                                ago
                            </span>
                            <small class="text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing
                                elit.</small>
                        </div>
                    </div>
                   
                </div>
                <!-- End of Comments -->
            </div>
            <!-- Sidebar -->
            <div class="col-lg-4">
                <form class="d-none d-lg-block mb-4">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>
               
                <h4 class="fw-bolder mb-4">Other Posts</h4>
                <div class="row">
                    <!-- OTHER POSTS--->
                    <div class="col-md-6 col-lg-12 mb-3">
                        <div class="card custom-card post p-2">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="writer d-flex align-items-center mb-3">
                                        <img src="{{asset('home/assets/img/avatar-1.jpg')}}" class="img-writer rounded-circle me-2"
                                            alt="John Doe">
                                        <a href="#" class="writer-name fw-bolder">John Doe</a>
                                    </div>
                                    <a role="button" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Save"><i class="bi bi-bookmark"></i></a>
                                </div>
                                <div class="img-container">
                                    <a href="">
                                        <img src="{{asset('home/assets/img/post-4.jpg')}}"  alt="Post 4" class="mb-3 rounded-3"
                                            height="180px">
                                    </a>
                                    <span class="post-tag">Music</span>
                                </div>
                                <a href="" class="fs-6 d-block text-dark fw-bolder">How Punk Became Punk?</a>
                                <small class="text-secondary">June 18, 2021</small>
                            </div>
                        </div>
                    </div>
                    <!-- OTHER POSTS END-->
                  
                    <h4 class="fw-bolder mt-3 mb-4">Popular Topics</h4>
                    <div class="topics">
                        <!-- OTHER TOPICS--->
                        <a href="" class="btn btn-dark rounded-pill me-2 mb-3">Tech</a>
                        <a href="" class="btn btn-outline-dark rounded-pill me-2 mb-3">See All
                            Topics</a>
                    </div>
                </div>
            </div>
            <!-- End of Sidebar -->
        </div>
    </div>
</section>