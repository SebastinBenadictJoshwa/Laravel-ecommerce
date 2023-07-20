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
<form action="{{url('addproducts')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="container shadow p-3 mt-5 rounded">
            <div class="h2 mt-5">Add Product</div>
            <br><br>
            <div class="form-floating mb-3 mt-3">
        <input type="text" name="name" id="name" class="form-control" required>
        <label for="name">Enter Name</label>
        </div>
        <div class="form-floating mb-3 mt-3">
        <textarea class="form-control" name="description" id="description"></textarea>
        <label for="description">Add Description</label>
        </div>
        <div class="form-floating mb-3 mt-3">
        <input type="number" name="quantity" id="quantity" class="form-control" required>
        <label for="quantity">Enter Quantity</label>
        </div>
        <div class="form-floating mb-3 mt-3">
        <input type="number" name="price" id="price" class="form-control" required>
        <label for="price">Enter price</label>
        </div>
        <div class="mb-3 mt-3">
        <label for="image" class="form-label h-5">Add Image of the product</label>
        <br>
            <input type="file" name="image" id="image">
        </div>
        <br>
        <div>
        <button type="submit" class="btn btn-primary" >Add</button>
        </div>
        <br>
        <br>
        </div>
    </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    setTimeout(function() {
        document.getElementById('greet-msg').style.display = 'none';
    }, 2000);
</script>
</body>
</html>