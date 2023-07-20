<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\products;
use App\Models\cart;
use App\Models\orders;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ecommerce extends Controller
{
       public function loginuser(Request $request){
        $validateData=$request->validate(
            [
                'email'=>'required',
                'password'=>'required',
            ]
            );
            if($request->email=="admin@gmail.com" && $request->password=="admin"){
                return view('admin.home');
            }
            elseif(Auth::attempt($request->only('email','password'))){
                return view('User.home');
            }
            return back()->with('error','Invalid email or password');
    }

    public function products(){
        $products=products::all();
        return view('admin.viewproducts',compact('products'));
    }

    public function addproduct(Request $request){
        $validateData=$request->validate([
            'name'=>'required',
            'description'=>'required',
            'quantity'=>'required',
            'price'=>'required',
            'image'=>'required|image|max:1000',
        ]);
        $product=new products;
        $product->name=$request->name;
        $product->description=$request->description;
        $product->quantity=$request->quantity;
        $product->price=$request->price;
        $image=$request->file('image');
        $name=date('Y-m-d').time().".".$image->extension();
        $path=public_path('productimages/');
        $image->move($path,$name);
        $product->image="productimages/".$name;
        $product->save();

        return redirect('products')->with('message','Product added successfully!!!');
    }

    public function removeproduct(){
        $products=products::all();
        return view('admin.removeproduct',compact('products'));
    }

    public function delete($id){
        $product=products::find($id);
        $product->delete();
        return back()->with('message',"Product Deleted Successfully !!!");
    }

    public function orders(){
        $orders=orders::all()->where('status','pending');
        $ordersconfirmed=orders::all()->where('status','approved');
        return view('admin.orders',compact('orders','ordersconfirmed'));
    }

    public function status($id){
        $order=orders::find($id);
        $order->status="approved";
        $order->save();
        return back()->with('message','order approved successfully !!!');
    }

    public function orderstatus($id){
        $order=orders::find($id);
        $order->status="delivered";
        $order->save();
        return back()->with('message','order updated successfully !!!');
    }
}

