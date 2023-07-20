<!doctype html>
<html lang="en" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Ecommerce Store</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/cover/">

<link href="{{asset('css\cover.css')}}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

     .background-imgg{
    background-image: url("https://images.hdqwalls.com/download/blur-background-6z-1920x1200.jpg");
    background-size: cover;
    backdrop-filter: blur(8px);
    margin-top: 30px;
    }
      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
<body class="h-100">
@include('User.header')
@if(session('message'))
<h4 class="alert alert-success" id="greet-msg">{{session('message')}}</h4>
@endif
<div class="h-100 text-center text-white background-imgg">

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column mt-6">
  <main class="px-3">
    <h1>Ecommerce Store</h1>
    <p class="lead">"Discover the world of endless possibilities, Where shopping becomes an experience"</p>
    <p class="lead">
      <a href="#" class="btn btn-sm btn-primary fw-bold">Learn more</a>
    </p>
  </main>
</div>
</div>
<script>
    setTimeout(function() {
        document.getElementById('greet-msg').style.display = 'none';
    }, 2000);
</script>
</body>
</html>
