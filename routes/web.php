<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ecommerce;
use App\Http\Controllers\customer;

Route::get('/', function () {
    return view('index');
});

Route::get('login', function(){
    return view('login');
});

Route::get('signup', function(){
    return view('signup');
});

Route::post('signupuser', [customer::class,'signupuser']);

Route::post('loginuser', [ecommerce::class,'loginuser']);

Route::get('forgotpassword',function(){
    return view('forgotpassword');
});

Route::post('forgot', [customer::class,'forgot']);

Route::get('adhome', function(){
    return view('admin.home');
});

Route::get('products',[ecommerce::class,'products']);

Route::get('addproduct',function(){
    return view('admin.addproduct');
});

Route::post('addproducts',[ecommerce::class,'addproduct']);

Route::get('removeproducts',[ecommerce::class,'removeproduct']);

Route::get('delete/{id}',[ecommerce::class,'delete']);

Route::get('orders',[ecommerce::class,'orders']);

Route::get('status/{id}',[ecommerce::class,'status']);

Route::get('orderstatus/{id}',[ecommerce::class,'orderstatus']);

Route::get('chome',function(){
    return view('User.home');
});

Route::get('cproducts',[customer::class,"products"]);

Route::get('addtocart/{id}',[customer::class,'addtocart']);

Route::post('add-to-cart',[customer::class,'addtocart_']);

Route::get('ccart',[customer::class,'viewcart']);

Route::get('removeproduct',[customer::class,'removeproduct']);

Route::get('remove/{id}',[customer::class,'remove']);

Route::get('checkout',[customer::class,'checkout']);

Route::post('usercheckout',[customer::class,'usercheckout']);

Route::get('corders',[customer::class,'orders']);

