<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
@include('User.header')
@if(session('message'))
<p class="alert alert-warning">{{session('message')}}</p>
@endif
<form action="{{url('add-to-cart')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container shadow p-3 mt-5 rounded">
            <div class="h2 mt-5">Add to cart</div>
            <br><br>
            <input type="hidden" name="id" value="{{$product->id}}">
            <div class="form-floating mb-3 mt-3">
        <input type="text" name="name" id="name" class="form-control" value="{{$product->name}}" readonly>
        <label for="name">Product Name</label>
        </div>
        <div class="form-floating mb-3 mt-3">
        <textarea class="form-control" name="description" id="description" readonly>{{$product->description}}</textarea>
        <label for="description">Product Description</label>
        </div>
        <div class="form-floating mb-3 mt-3">
        <input type="number" name="quantity" id="quantity" class="form-control" required>
        <label for="quantity">Enter Quantity</label>
        </div>
        <input type="hidden" name="image" value="{{$product->image}}">
        <div class="form-floating mb-3 mt-3">
        <input type="number" name="price" id="price" class="form-control" value="{{$product->price}}" readonly>
        <label for="price">Product price</label>
        </div>
        <br>
        <div>
        <button type="submit" class="btn btn-primary" >Add</button>
        </div>
        <br>
        <br>
        </div>
    </form>
</body>
</html>