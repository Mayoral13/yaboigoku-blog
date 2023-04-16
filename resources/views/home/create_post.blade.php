@include('home.styles')
@include('home.navbar')
<div class="container w-50">
    <div class="card">
      <div class="card-body">
        <form enctype="multipart/form-data" method="POST" action = "{{url('/create_post')}}">
          @csrf
          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title">
          </div>
          <div class="mb-3">
            <label for="category" class="form-label">Category</label>
            <input type="text" class="form-control" id="category" name="category">
          </div>
          <div class="mb-3">
            <label for="post" class="form-label">Post</label>
            <textarea class="form-control" id="post" name="post" rows="3"></textarea>
          </div>
          <div class="mb-3">
            <label for="image" class="form-label">Image</label>
            <input type="file" class="form-control" id="image" name="image">
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
  
  
  @include('home.scripts')
  