<!DOCTYPE html>
<html lang="en">

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<head>

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
      text-align: left;
      margin-bottom: 10px;
    }

    .black-box {
      background-color: black;
      color: white;
      padding: 20px 50px; /* Adjusted padding */
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      margin-top: 20px;
      text-align: left; /* Align form content to the left */
    }

    .black-box input[type="text"],
    .black-box input[type="number"],
    .black-box input[type="file"] {
      color: black;
      width: calc(100% - 220px); /* Adjust input width */
      padding: 8px;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    .black-box input[type="file"] {
      margin-top: 10px;
    }

    .black-box .btn-success {
      margin-top: 10px;
      padding: 10px 20px;
      border-radius: 5px;
    }

    .black-box .btn-container {
      display: flex;
      justify-content: flex-end; /* Align button to the right */
      align-items: flex-start; /* Align button vertically with input fields */
    }
  </style>

</head>

<body>

  @include('admin.sidebar')

  @include('admin.navbar')

  <!-- partial -->

  <div class="container-fluid page-body-wrapper">
    <div class="container">
      <div class="black-box">
        <h1 class="title">Add Product</h1>

        @if(Session::has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert" style="position: relative; padding-right: 50px;">
          {{ session()->get('message') }}
          <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%);">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        @endif

        <form action="{{url('uploadproduct')}}" method="post" enctype="multipart/form-data">
          @csrf

          <div style="padding: 15px;">
            <label>Book title</label>
            <input type="text" name="title" placeholder="Give a book title" required="">
          </div>

          <div style="padding: 15px;">
            <label>Author</label>
            <input type="text" name="author" placeholder="Author name" required="">
          </div>

          <div style="padding: 15px;">
            <label>Genre</label>
            <input type="text" name="genre" placeholder="Book Genre" required="">
          </div>

          <div style="padding: 15px;">
            <label>Description</label>
            <input type="text" name="des" placeholder="Give a description" required="">
          </div>

          <div style="padding: 15px;">
            <label>Price</label>
            <input type="number" name="price" placeholder="Give a price" required="">
          </div>

          <div style="padding: 15px;">
            <label>Quantity</label>
            <input type="number" name="quantity" placeholder="Product Quantity" required="">
          </div>

          <div style="padding: 15px;">
            <input type="file" name="file">
          </div>

          <div class="btn-container">
            <input class="btn btn-success" type="submit" value="Submit">
          </div>
        </form>
      </div>
    </div>
  </div>

  <!-- partial -->


</body>

</html>
