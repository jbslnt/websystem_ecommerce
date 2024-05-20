<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  @include('admin.css')

  <style>
    /* Add your custom CSS here */
    .container {
      margin-top: 20px;
    }

    .alert {
      position: relative;
      padding-right: 50px;
      margin-bottom: 20px;
      border-radius: 5px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      background-color: #333;
      color: white;
    }

    .alert .close {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
      color: white;
    }

    .table-container {
      background-color: #333;
      color: white;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th,
    td {
      padding: 15px;
      text-align: center;
      border: 1px solid #555;
    }

    th {
      background-color: #444;
      color: white;
    }

    tr {
      background-color: #222;
      color: white;
    }

    tr:hover {
      background-color: #111;
    }

    .btn {
      margin: 5px;
      border-radius: 5px;
    }

    .btn-primary {
      background-color: #007bff;
      color: white;
    }

    .btn-primary:hover {
      background-color: #0056b3;
    }

    .btn-danger {
      background-color: #dc3545;
      color: white;
    }

    .btn-danger:hover {
      background-color: #c82333;
    }

    .product-image {
      width: 220px;
      height: 250px;
    }
  </style>
</head>

<body>

  @include('admin.sidebar')

  @include('admin.navbar')

  <!-- partial -->
  <div style="padding-bottom: 30px;" class="container-fluid page-body-wrapper">
    <div class="container table-container" align="center">
      @if(Session::has('message'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session()->get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
      <table>
        <thead>
          <tr>
            <th>Book Title</th>
            <th>Author</th>
            <th>Genre</th>
            <th>Description</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Image</th>
            <th>Update</th>
            <th>Delete</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $product)
          <tr>
            <td>{{ $product->title }}</td>
            <td>{{ $product->author }}</td>
            <td>{{ $product->genre }}</td>
            <td>{{ $product->des }}</td>
            <td>{{ $product->price }}</td>
            <td>{{ $product->quantity }}</td>
            <td>
              <img src="/productimage/{{ $product->image }}" class="product-image">
            </td>
            <td>
              <a class="btn btn-primary" href="{{ url('updateview', $product->id) }}">Update</a>
            </td>
            <td>
              <a class="btn btn-danger" href="{{ url('deleteproduct', $product->id) }}">Delete</a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

  @include('admin.script')

</body>

</html>
