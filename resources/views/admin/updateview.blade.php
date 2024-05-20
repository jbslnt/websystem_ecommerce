<!DOCTYPE html>
<html lang="en">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<head>

  <base href="/public">

  @include('admin.css')

  <style type="text/css">
    .title {
      color: white;
      padding-top: 25px;
      font-size: 25px;
    }

    label {
      display: inline-block;
      width: 200px;
    }

    .form-container {
      background-color: #333;
      color: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      margin-top: 20px;
      text-align: left;
    }

    .form-group {
      padding: 15px;
    }

    .form-group label {
      margin-bottom: 5px;
    }

    .form-group input[type="text"],
    .form-group input[type="number"],
    .form-group input[type="file"] {
      color: black;
      width: 100%;
      padding: 8px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .form-group img {
      width: 220px;
      height: 250px;
      margin-top: 10px;
      border-radius: 5px;
    }

    .form-group .btn-success {
      margin-top: 10px;
      padding: 10px 20px;
      border-radius: 5px;
    }

    .form-group .btn-container {
      text-align: right;
    }

    .submit-container {
      text-align: right;
      padding-right: 15px;
      padding-top: 15px;
    }
  </style>

</head>

<body>

  @include('admin.sidebar')

  @include('admin.navbar')

  <!-- partial -->

  <div class="container-fluid page-body-wrapper">

    <div class="container form-container">

      <h1 class="title">Add Product</h1>

      @if(Session::has('message'))
      <div class="alert alert-success alert-dismissible fade show" role="alert" style="position: relative; padding-right: 50px;">
        {{ session()->get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%);">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif

      <form action="{{url('updateproduct', $data->id)}}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="form-group">
          <label>Book Title</label>
          <input type="text" name="title" value="{{$data->title}}" required="">
        </div>

        <div class="form-group">
          <label>Author</label>
          <input type="text" name="author" value="{{$data->author}}" required="">
        </div>

        <div class="form-group">
          <label>Genre</label>
          <input type="text" name="genre" value="{{$data->genre}}" required="">
        </div>

        <div class="form-group">
          <label>Description</label>
          <input type="text" name="des" value="{{$data->des}}" required="">
        </div>

        <div class="form-group">
          <label>Price</label>
          <input type="number" name="price" value="{{$data->price}}" required="">
        </div>

        <div class="form-group">
          <label>Quantity</label>
          <input type="number" name="quantity" value="{{$data->quantity}}" required="">
        </div>

        <div class="form-group">
          <label>Old Image</label>
          <img src="/productimage/{{$data->image}}">
        </div>

        <div class="form-group">
          <label>Change the Image</label>
          <input type="file" name="file">
        </div>

        <div class="submit-container">
          <input class="btn btn-success" type="submit" value="Submit">
        </div>

      </form>

    </div>

  </div>

  @include('admin.script')

</body>

</html>
