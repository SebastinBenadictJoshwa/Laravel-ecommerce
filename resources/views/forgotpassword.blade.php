<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Store</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body class="bg-white">
    @if($errors->any())
    <ul class="alert alert-danger" id="greet-msg">
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
    </ul>
    @endif
    <form action="{{url('forgot')}}" method="post">
        @csrf
        <div class="container shadow p-3 mt-5 rounded">
            <div class="h2 mt-5">Forgot Password</div>
            <br><br>
        <div class="form-floating mb-3 mt-3">
        <input type="email" name="email" id="email" class="form-control" required>
        <label for="email">Enter Email</label>
        </div>
        <div class="form-floating mb-3 mt-3">
        <input type="password" name="password" id="password" class="form-control" required>
        <label for="password">Enter Password</label>
        </div>
        <div class="form-floating mb-3 mt-3">
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
        <label for="password_confirmation">Retype Password</label>
        </div>
        <br>
        <div>
        <button type="submit" class="btn btn-primary">Change Password</button>
        <span><a class="text-decoration-none text-dark px-3" href="{{url('login')}}">Login</a></span>
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