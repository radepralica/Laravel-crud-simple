<!DOCTYPE html>
<html>
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Sweet Alert 2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<title>Products</title>
<body>

<div class="container mt-3">

  <div class="mt-4 p-3 bg-primary text-white rounded">
    <h1 style="text-align: center;">Products</h1>

  </div>
</div>
<br><br>

<div class="container">
<table class="table " style="font-size: large;">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Qty</th>
                    <th>Price</th>
                    <th class="text-wrap w-50">Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="tBody">
<?php
    $nr=1;
    ?>
@foreach ($products as $product )

                <tr>
                    <td>{{$nr++}})</td>
                    <td>{{$product['name']}}</td>
                    <td>{{$product['qty']}}</td>
                    <td>{{$product['price']}}</td>
                    <td>{{$product['description']}}</td>
                    <td>
                       <button  class="btn btn-warning"><a style="text-decoration: none" class="text-white " href="{{route('product.edit',['product'=>$product])}}">Edit</a></button>
                    <form action="{{route('product.delete',['product'=>$product])}}" method="post">
                        @csrf
                        @method('delete')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                </tr>
@endforeach

            </tbody>
        </table>
    </div>
<br><br>
<button  class="btn btn-success offset-5"><a style="text-decoration: none" class="text-white " href="{{route('product.create')}}">Create</a></button>
</body>
</html>
