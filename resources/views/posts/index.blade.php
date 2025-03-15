<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Posts</title>
  <style>
    body {
      background-color: #f3f4f6;
      font-family: 'Arial', sans-serif;
      color: #333;
    }

    .navbar {
      background-color: #333;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }
    .navbar-brand {
      font-size: 1.8rem;
      color: #fff !important;
      font-weight: bold;
    }
    .btn-success {
      background-color: #4CAF50;
      border-color: #4CAF50;
    }
    .btn-success:hover {
      background-color: #45a049;
      border-color: #45a049;
    }

    .card {
      border-radius: 12px;
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
      background: linear-gradient(145deg, #f8f9fa, #d1d7e1);
      transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .card:hover {
      transform: translateY(-10px);
      box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
    }

    .card-header {
      background-color:rgba(122, 140, 160, 0.84);
      color: #fff;
      border-radius: 12px 12px 0 0;
      padding: 15px;
      font-size: 1.2rem;
    }

    .card-footer {
      background-color: #f1f1f1;
      border-radius: 0 0 12px 12px;
      padding: 12px 20px;
      text-align: right;
    }

    .card-body {
      padding: 20px;
    }

    .card-title {
      font-size: 1.4rem;
      font-weight: bold;
    }

    .card-text {
      color: #555;
      font-size: 1rem;
      line-height: 1.5;
    }

    /* Button Styles */
    .btn {
      padding: 8px 15px;
      font-size: 1rem;
      border-radius: 8px;
      transition: all 0.3s ease;
    }

    .btn-primary {
      background-color:rgb(127, 146, 167);
      border-color:rgb(127, 146, 167);
    }

    .btn-primary:hover {
      background-color:rgb(122, 143, 167);
      border-color:rgb(122, 143, 167);
    }

    .btn-danger {
      background-color: #e3342f;
      border-color: #e3342f;
    }

    .btn-danger:hover {
      background-color: #c82333;
      border-color: #bd2130;
    }

    .container {
      margin-top: 50px;
    }

    .col-12.col-sm-6.col-md-4 {
      padding: 10px;
    }

    .mt-6 {
      margin-top: 60px;
    }
  </style>
</head>
<body>
 
  <nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand h1" href="{{ route('posts.index') }}">Posts</a>
      <div class="d-flex justify-content-end">
        <a class="btn btn-sm btn-success" href="{{ route('posts.create') }}" title="Add a new post">Add Post</a>
      </div>
    </div>
  </nav>

  <div class="container mt-6">
    <!-- Display success message if session has 'success' key -->
    @if (session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
    @endif

    <div class="row">
      @foreach ($posts as $post)
        <div class="col-12 col-sm-6 col-md-4 mb-4">
          <div class="card">
            <div class="card-header">
              <h5 class="card-title">{{ $post->title }}</h5>
            </div>
            <div class="card-body">
              <p class="card-text">{{ $post->body }}</p>
            </div>
            <div class="card-footer">
              <div class="d-flex justify-content-between">
                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm" aria-label="Edit post {{ $post->title }}">Edit</a>
                <form action="{{ route('posts.destroy', $post->id) }}" method="post">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm" aria-label="Delete post {{ $post->title }}">Delete</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

</body>
</html>

