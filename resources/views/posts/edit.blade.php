
<div class="container h-100 mt-6">
  <div class="row h-100 justify-content-center align-items-center">
    <div class="col-10 col-md-8 col-lg-6">
      <h3>Update Comment</h3>
      <form action="{{ route('posts.update', $post->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" title="title"
            value="{{ $post->title }}" required>
        </div>
        <div class="form-group">
          <label for="body">Body</label>
          <textarea class="form-control" id="body" title="body" rows="3" required>{{ $post->confession }}</textarea>
        </div>
        <button type="submit" class="btn mt-3 btn-primary">Update Comment</button>
      </form>
    </div>
  </div>
</div>