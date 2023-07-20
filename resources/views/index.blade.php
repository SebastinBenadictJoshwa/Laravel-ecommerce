<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ecommerce Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<style>
    .center{
        align-items: center;
        justify-content: center;
        margin-top: 25%;
    }
    body{
    background-image: url("https://images.hdqwalls.com/download/blur-background-6z-1920x1200.jpg");
    background-size: cover;
    height: 100vh;
    backdrop-filter: blur(8px);
    }</style>
</head>
<body class="bg">
    <nav class="navbar navbar-expand-md bg-dark ">
        <div class='container'>
                <span class="navbar-text text-white mr-auto">Ecommerce</span>
                    <a class="btn btn-white text-white ml-auto" href="{{url('login')}}">Login</a>
                    <a class="btn btn-white text-white" href="{{url('signup')}}">Signup</a>
        </div>
    </nav>
    <div class="d-flex align-items-center justify-content-center center">
        <p class="h4 m-4 p-1 text-center text-white text-shadow">Welcome to,</p><br>
        <div class="h1 text-center text-white">Ecommerce Store</div>
    </div>
    
</body>
</html>