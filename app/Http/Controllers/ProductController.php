<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Session;
use Illuminate\Support\Facades\DB;
use App\Models\Order;

class ProductController extends Controller
{
    //
    function index()
    {
        $data = Product::all();
        return view('product',['products'=>$data]);
    }
    function detail($id)
    {
        $data = Product::find($id);
        return view('detail',['product'=>$data]);
    }
    function search(Request $req)
    {
        if($req->input('query')!=null)
        {
            $data= Product::where('name', 'like', '%'.$req->input('query').'%')->get();
            return view('search',['products'=>$data]);
        }
        else
        {
            return redirect('/');
        }
    }
    function addToCart(Request $req)
    {   
        if($req->session()->has('user'))
        {   
            $exists = Cart::where('user_id',$req->session()->get('user')['id'])->where('product_id',$req->product_id)->first();
            if($exists == null)
            {
                $cart = new Cart;
                $cart->user_id = $req->session()->get('user')['id'];
                $cart->product_id = $req->product_id;
                $cart->quantity = $req->quantity;
                $cart->save();
            }
            else{
                Cart::where('user_id',$req->session()->get('user')['id'])->where('product_id',$req->product_id)
                    ->update([
                        'quantity'=> $req->quantity
                    ]);
            }
            return redirect('/');
        }
        else
        {
            return redirect('/login');
        }
    }
    static function cartItem()
    {
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
    function cartList()
    {
        $userId=Session::get('user')['id'];
        $products= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id','cart.quantity as quantity')
        ->get();

        return view('cartlist',['products'=>$products]);
    }
    function decrementQuantity($id)
    {   
        $quantity = DB::table('cart')->where('id',$id)->select('quantity')->get();
        foreach($quantity as $item)
            $a=(array)$item;

        DB::table('cart')
        ->where('id', $id)
        ->update([
            'quantity'=>$a['quantity']-1
        ]);
        return redirect('cartlist');
    }
    function incrementQuantity(Request $req,$id)
    {
        $quantity = DB::table('cart')->where('id',$id)->select('quantity')->get();
        foreach($quantity as $item)
            $a=(array)$item;
            
        DB::table('cart')
        ->where('id', $id)
        ->update([
            'quantity'=>$a['quantity']+1
        ]);
        return redirect('cartlist');
    }
    function removeCart($id)
    {
        Cart::destroy($id);
        return redirect('cartlist');
    }
    function orderNow()
    {
        $userId=Session::get('user')['id'];
        $list= DB::table('cart')
         ->join('products','cart.product_id','=','products.id')
         ->where('cart.user_id',$userId)
         ->select('products.*','cart.quantity as quantity')->get();
        $total=0;
        foreach($list as $item)
        {
            $a =  (array)$item;
            $total = $total + ($a['current_price']*$a['quantity']);
        }
         return view('ordernow',['products'=>$list,'total'=>$total]);
    }
    function orderPlace(Request $req)
    {
        $userId=Session::get('user')['id'];
         $allCart= Cart::where('user_id',$userId)->get();
         foreach($allCart as $cart)
         {
             $order= new Order;
             $order->product_id=$cart['product_id'];
             $order->user_id=$cart['user_id'];
             $order->quantity=$cart['quantity'];
             $order->status="Yet to dispatch";
             $order->payment_method=$req->payment;
             if($req->payment == "Pay on Delivery")
                $order->payment_status="Pending";
             else
                $order->payment_status="Done";
             $order->address=$req->address;
             $order->save();
             Cart::where('user_id',$userId)->delete(); 
         }
         $req->input();
         return redirect('/');
    }
    function myOrders()
    {
        $userId=Session::get('user')['id'];
        $orders= DB::table('orders')
         ->join('products','orders.product_id','=','products.id')
         ->where('orders.user_id',$userId)
         ->get()->reverse();
 
         return view('myorders',['orders'=>$orders]);
    }
}
