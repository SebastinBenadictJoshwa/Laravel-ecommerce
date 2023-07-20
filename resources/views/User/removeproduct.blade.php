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
@if($errors->any())
    <ul class="alert alert-danger" id="greet-msg">
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    @if(session('message'))
    <p class="alert alert-warning" id="greet-msg">{{session('message')}}</p>
    @endif
<div class="container mt-5"><div class="text-center h4">Remove Products</div></div>
<table class="table mt-5 mx-4">
    <thead>
        <tr>
            <th>Name</th>
            <th>Quantity</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{$product->name}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->price}}</td>
            <td><a class="btn btn-outline-primary" href="{{url('remove')}}/{{$product->id}}">Remove</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    setTimeout(function() {
        document.getElementById('greet-msg').style.display = 'none';
    }, 2000);
</script>
</body>
</html>