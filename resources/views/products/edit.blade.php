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
<title>Edit</title>
<body>

<div class="container mt-3">

  <div class="mt-4 p-3 bg-primary text-white rounded">
    <h1 style="text-align: center;">Edit</h1>

  </div>
</div>

<form action="{{route('product.update',['product'=>$product])}}" method="post">
@csrf
@method('put')
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <br>
    <input type="text" class="form-control" name="name" placeholder="Name" value="{{$product->name}}"> <br>
    @error('name')
<p style="font-size:0.9rem" class="text-danger offset-2">{{$message}}</p>
    @enderror
    <input type="number" class="form-control" name="qty" placeholder="Qty"  value="{{$product->qty}}"><br>
       @error('qty')
<p style="font-size:0.9rem" class="text-danger offset-2">{{$message}}</p>
    @enderror
    <input type="text" class="form-control" name="price" placeholder="Price" value="{{$product->price}}"> <br>
    @error('price')
    <p style="font-size:0.9rem" class="text-danger offset-2">{{$message}}</p>
        @enderror
    <input type="text" class="form-control" name="description" placeholder="Description" value="{{$product->description}}"> <br>
       @error('description')
<p style="font-size:0.9rem" class="text-danger offset-2">{{$message}}</p>
    @enderror

            </div>
        </div>
    </div>
<button class="btn btn-info offset-4" type="submit">Update</button>
{{-- <button class="btn btn-info offset-1" type="submit">Nazad</button> --}}
</form>



</body>
</html>
