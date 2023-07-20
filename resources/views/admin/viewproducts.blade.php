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
@include('admin.header')
@if($errors->any())
    <ul class="alert alert-danger" id="greet-msg">
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    @if(session('message'))
    <p class="alert alert-success" id="greet-msg">{{session('message')}}</p>
    @endif
<div class="container-fluid mt-5 align-items-right">
<a href="{{url('addproduct')}}" class="btn btn-outline-primary float-end mx-3">Add Products</a><span><a href="{{url('removeproducts')}}" class="btn btn-outline-primary float-end">Remove Products</a></span>
</div>
<br><br>
<div class="container mt-5">
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-3 mb-3 ms-5 border rounded border-dark">
            <img src="{{asset($product->image)}}" class="card-img-top mt-1">
            <div class="card-body">
                <h5 class="card-title">{{$product->name}}</h5>
                <p class="card-text">{{$product->description}}</p>
                <p class="card-text">Quantity: {{$product->quantity}}</p>
                <p class="card-text">Price: Rs.{{$product->price}}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>
</div> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    setTimeout(function() {
        document.getElementById('greet-msg').style.display = 'none';
    }, 2000);
</script>
</body>
</html>