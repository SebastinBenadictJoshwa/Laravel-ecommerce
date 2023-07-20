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
@if(session('message'))
<p class="alert alert-success">{{session('message')}}</p>
@endif
@if(count($orders)>0)
<table class="table mt-5 mx-4">
    <thead>
        <tr>
            <th colspan="6"><div class="h4 text-center bg-dark text-white p-3">Orders recieved</div></th>
        </tr>
        <tr>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Customer name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
        <tr>
            <td>{{$order->name}}</td>
            <td>{{$order->quantity}}</td>
            <td>{{$order->uname}}</td>
            <td>{{$order->address}}</td>
            <td>{{$order->phone}}</td>
            <td><a class="btn btn-outline-primary" href="{{url('status')}}/{{$order->id}}">Confirm</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@else
   <div class="h3 text-center mt-5">No orders rightnow....</div>
@endif
@if(count($ordersconfirmed)>0)
<table class="table mt-5 mx-4">
    <thead>
        <tr>
            <th colspan="6"><div class="h4 text-center bg-dark text-white p-3">Orders Confirmed</div></th>
        </tr>
        <tr>
            <th>Product Name</th>
            <th>Quantity</th>
            <th>Customer name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($ordersconfirmed as $order)
        <tr>
            <td>{{$order->name}}</td>
            <td>{{$order->quantity}}</td>
            <td>{{$order->uname}}</td>
            <td>{{$order->address}}</td>
            <td>{{$order->phone}}</td>
            <td><a class="btn btn-outline-primary" href="{{url('orderstatus')}}/{{$order->id}}">Delivered</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
</body>
</html>