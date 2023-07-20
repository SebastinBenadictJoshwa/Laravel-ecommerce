<?php

namespace App\Http\Controllers;

use App\Models\orders;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\cart;
use App\Models\products;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class customer extends Controller
    {
        public function signupuser(Request $request){
            $validateData=$request->validate(
                [
                    'name'=>'required',
                    'email'=>'required|unique:users,email',
                    'password'=>'required|confirmed',
                ]
                );
            User::create([
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
            ]);
            return redirect('login')->with('message',"Signup completed successfully");
        }

        public function forgot(Request $request){
            $request->validate([
                'email'=>'required|email',
                'password'=>'required|confirmed|min:6'
            ]);
            $user=DB::table('users')->where('email',$request->email)->first();
            if(!$user){
                return back()->withErrors('User not found please signup ..');
            }
            $user1=User::find($user->id);
            $user1->password=Hash::make($request->password);
            $user1->save();
            return redirect('login')->with('message','password changed successfully !!');
        }

        public function products(){
            $products=products::all();
            return view('User.products',compact('products'));
        }

        public function addtocart($id){
            $product=products::find($id);
            return view('User.addtocart',compact('product'));
        }

        public function addtocart_(Request $request){
            $validateData=$request->validate([
                'quantity'=>'required|min:1',
            ]);
            $product=products::find($request->id);

            if($request->quantity<$product->quantity){
            $user=Auth::user();
            $cart=new cart;
            $cart->email=$user->email;
            $cart->name=$request->name;
            $cart->quantity=$request->quantity;
            $cart->price=$request->price;
            $cart->description=$request->description;
            $cart->image=$request->image;
            $cart->save();

            $product->quantity=$product->quantity-$request->quantity;
            $product->save();
            return redirect('cproducts')->with('message','Added Successfully !!!');
            }
            else{
                return back()->with('message','insufficient quantity !!!');
            }
        }

        public function viewcart(){
            $user=Auth::user();
            $email=$user->email;
            $products=cart::all()->where('email',$email);
            return view('User.cart',compact('products'));
        }

        public function removeproduct(){
            $email=Auth::user()->email;
            $products=cart::all()->where('email',$email);
            return view('User.removeproduct',compact('products'));
        }

        public function remove($id){
            $product=cart::find($id);
            $productname=$product->name;
            $quantity1=$product->quantity;
            $product2=DB::table('products')->where('name',$productname)->first();
            $productt=products::find($product2->id);
            $quantity2=$productt->quantity;
            $productt->quantity=$quantity1+$quantity2;
            $productt->save();
            $product->delete();
            return back()->with('message','Product removed from cart');
        }

        public function checkout(){
            $user=Auth::user();
            $email=$user->email;
            $products=cart::all()->where('email',$email);
            $count=count($products);
            $price=0;
            foreach($products as $product)
              $price=$price+($product->price*$product->quantity);
            return view('User.checkout',compact('price'));
        }

        public function usercheckout(Request $request){
            $request->validate([
                'address'=>'required',
                'phone'=>'required|min:10|max:10'
            ]);
            $user=Auth::user();
            $umail=$user->email;
            $cart=cart::all()->where('email',$umail);
            foreach($cart as $product){
             $order=new orders;
             $order->email=$umail;
             $order->name=$product->name;
             $order->quantity=$product->quantity;
             $order->price=$product->quantity*$product->price;
             $order->description=$product->description;
             $order->image=$product->image;
             $order->address=$request->address;
             $order->phone=$request->phone;
             $order->uname=$user->name;
             $order->status="pending";
             $order->save();
             $product->delete();
         }
         return redirect('chome')->with('message','Order placed Successfully !!!');
        }

        public function orders(){
            $email=Auth::user()->email;
            $orders=orders::all()->where('email',$email);
            return view('User.orders',compact('orders'));
        }
    }
    