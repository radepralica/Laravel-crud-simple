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
<title>Create</title>
<body>

<div class="container mt-3">

  <div class="mt-4 p-3 bg-primary text-white rounded">
    <h1 style="text-align: center;">Create</h1>

  </div>
</div>

<form action="{{route('product.store')}}" method="post">
@csrf
@method('post')
    <div class="container">
        <div class="row">
            <div class="col-6 offset-3">
                <br>
    <input type="text" class="form-control" name="name" placeholder="Name" value="{{old('name')}}"> <br>
    @error('name')
<p style="font-size:0.9rem" class="text-danger offset-2">{{$message}}</p>
    @enderror
    <input type="number" class="form-control" name="qty" placeholder="Qty"  value="{{old('qty')}}"><br>
       @error('qty')
<p style="font-size:0.9rem" class="text-danger offset-2">{{$message}}</p>
    @enderror
    <input type="text" class="form-control" name="price" placeholder="Price" value="{{old('price')}}"> <br>
    @error('price')
    <p style="font-size:0.9rem" class="text-danger offset-2">{{$message}}</p>
        @enderror
    <input type="text" class="form-control" name="description" placeholder="Description" value="{{old('description')}}"> <br>
       @error('description')
<p style="font-size:0.9rem" class="text-danger offset-2">{{$message}}</p>
    @enderror
<button class="btn btn-info offset-4" type="submit">Save</button>
            </div>
        </div>
    </div>

</form>



</body>
</html>
