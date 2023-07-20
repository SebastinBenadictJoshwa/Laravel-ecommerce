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
    <p class="alert alert-success" id="greet-msg">{{session('message')}}</p>
    @endif
    @if($errors->any())
    <ul class="alert alert-danger"  id="greet-msg">
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
    </ul>
    @endif
    <form action="{{url('usercheckout')}}" method="post">
        @csrf
        <div class="container shadow p-3 mt-5 rounded">
            <div class="h2 mt-5">Checkout</div>
            <br><br>
        <div class="h5 text-center mb-5">Total price for your products : {{$price}}</div>
        <div class="form-floating mb-3 mt-3">
        <textarea class="form-control" name="address" id="address" row="4"></textarea>
        <label for="address">Enter your address</label>
        </div>
        <div class="form-floating mb-3 mt-3">
        <input type="number" name="phone" id="phone" class="form-control" required>
        <label for="phone">Enter Phone Number</label>
        </div>
        <br>
        <div>
        <button type="submit" class="btn btn-primary">Order</button>
        </div>
        <br>
        <br>
        </div>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    setTimeout(function() {
        document.getElementById('greet-msg').style.display = 'none';
    }, 3000);
</script>
</body>
</html>
