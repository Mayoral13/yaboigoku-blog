@include('home.styles')
@include('home.navbar')
<section class="posts mb-4">
    <div class="container">
        <div class="row m-auto">
            <div>
                <form class="d-none d-lg-block mb-4 w-50 m-auto">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-search"></i></span>
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>
            </div>
            <div class="col-md col-lg-8 mb-4 m-auto">
                
                <div class="row">
                    @foreach($posts as $post)
                    <div class="col-6 mb-3 m-auto">
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
                {!!$posts->links('pagination::bootstrap-5')!!}  
            </div>
        
         
            <!-- Sidebar -->
        
            <!-- End of Sidebar -->
        </div>
        <div class="d-flex justify-content-center">
       
        </div>
    </div>
  
</section>
@include('home.scripts')