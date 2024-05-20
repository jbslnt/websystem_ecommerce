<!DOCTYPE html>
<html lang="en">

<head>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  @include('admin.css') <!-- Assuming this includes necessary CSS -->

  <style type="text/css">
    /* Add your custom CSS here */
    .container-table {
      background-color: #333;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.5);
      padding: 20px;
      margin-top: 20px;
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

    tr:nth-child(even) {
      background-color: #222;
      color: white;
    }

    tr:hover {
      background-color: #111;
    }

    .btn-deliver {
      background-color: #007bff;
      color: white;
      border: none;
      padding: 10px 20px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      margin: 4px 2px;
      cursor: pointer;
      border-radius: 5px;
    }

    .btn-deliver:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
  @include('admin.sidebar')
  @include('admin.navbar')

  <div class="container-fluid page-body-wrapper">
    <div class="container" align="center">
      @if(Session::has('message'))
      <div class="alert alert-success alert-dismissible fade show" role="alert" style="position: relative; padding-right: 50px;">
        {{ session()->get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" style="position: absolute; right: 10px; top: 50%; transform: translateY(-50%);">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif

      <div class="container-table">
        <table>
          <tr style="background-color: #444">
            <td style="padding: 30px;">Customer Name</td>
            <td style="padding: 30px;">Phone</td>
            <td style="padding: 30px;">Address</td>
            <td style="padding: 30px;">Book Title</td>
            <td style="padding: 30px;">Price</td>
            <td style="padding: 30px;">Quantity</td>
            <td style="padding: 30px;">Status</td>
            <td style="padding: 30px;">Action</td>
          </tr>

          @foreach($order as $orders)
          <tr align="center">
            <td style="padding: 20px;">{{$orders->name}}</td>
            <td style="padding: 20px;">{{$orders->phone}}</td>
            <td style="padding: 20px;">{{$orders->address}}</td>
            <td style="padding: 20px;">{{$orders->product_name}}</td>
            <td style="padding: 20px;">{{$orders->price}}</td>
            <td style="padding: 20px;">{{$orders->quantity}}</td>
            <td style="padding: 20px;">{{$orders->status}}</td>
            <td style="padding: 20px;">
              <a class="btn btn-deliver" href="{{url('updatestatus', $orders->id)}}">Deliver</a>
            </td>
          </tr>
          @endforeach
        </table>
      </div>
    </div>
  </div>

  @include('admin.script')
</body>

</html>
