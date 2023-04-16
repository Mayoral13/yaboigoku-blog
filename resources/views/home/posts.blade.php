
<section class="posts mb-4">
    <div class="container">
        <div class="row">
            <div class="col-md col-lg-8 mb-4">
                <div class="row">
                    @foreach($posts as $post)
                    <div class="col-6">
                        <div class="card custom-card post h-100 p-2">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="writer d-flex align-items-center mb-3">
                                        <img src="{{asset('home/assets/img/avatar-1.jpg')}}"  class="img-writer rounded-circle me-2"
                                            alt="{{$post->username}}">
                                        <a href="{{url('post',$post->id)}}" class="writer-name fw-bolder">{{$post->username}}</a>
                                    </div>
                                    <a role="button"><i class="bi bi-bookmark" data-bs-toggle="tooltip"
                                            data-bs-placement="top" title="Save"></i></a>
                                </div>
                                <div class="img-container">
                                    <a href="{{url('post',$post->id)}}">
                                        <img src="/product/{{$post->image}}"  alt="{{$post->id}}" class="mb-3 rounded-3"
                                            height="200px">
                                    </a>
                                    <span class="post-tag">{{$post->category}}</span>
                                </div>
                                <a href="{{url('post',$post->id)}}" class="fs-6 d-block text-dark fw-bolder">{{$post->title}}</a>
                                <small class="text-secondary">{{$post->created_at}}&bullet;</small>
                            </div>
                        </div>
                      
                    </div>
                    @endforeach
                   
                </div>
                <a href="{{url('/all_posts')}}" class="btn btn-outline-dark rounded-pill mb-4">See More Posts &DoubleRightArrow;</a>
            </div>
         
            <!-- Sidebar -->
            <div class="col-lg-4">
                <form class="d-none d-lg-block mb-4">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>
                
                <h4 class="fw-bolder mb-4">Popular Posts</h4>
                <div class="row">

                    <!-- POPULAR POSTS START--->
                    <div class="col-md-6 col-lg-12">
                        <div class="card custom-card post p-2 mb-3">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <div class="writer d-flex align-items-center mb-3">
                                        <img src="{{asset('home/assets/img/avatar-2.jpg')}}"  class="img-writer rounded-circle me-2"
                                            alt="Akande Mayowa">
                                        <a href="#" class="writer-name fw-bolder">Akande Mayowa</a>
                                    </div>
                                    <a role="button" data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="Save"><i class="bi bi-bookmark"></i></a>
                                </div>
                                <div class="img-container">
                                    <a href="#">
                                        <img src="{{asset('home/assets/img/post-4.jpg')}}"  alt="Post 4" class="mb-3 rounded-3"
                                            height="180px">
                                    </a>
                                    <span class="post-tag">Technology</span>
                                </div>
                                <a href="/single.html" class="fs-6 d-block text-dark fw-bolder">Welcome to Yaboigoku's Blog</a>
                                <small class="text-secondary"> <?php echo(date("Y-m-d"))?> &bullet;</small>
                            </div>
                        </div>
                    </div>
                   
                      <!-- POPULAR POSTS END--->
                  
                </div>
                <!--POSTS EXAMPLE END--->
                
                  <!-- POSTS EXAMPLE END--->
            </div>
            <!-- End of Sidebar -->
        </div>
    </div>
</section>