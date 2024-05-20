<?php

namespace App\Http\Controllers\product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cart;

class ArrivalsController extends Controller
{
    public function p1()
    {
        $user=auth()->user();

        $cart=cart::where('phone',$user->phone)->get();
         
        $count=cart::where('phone',$user->phone)->count();
        

         return view('user/newarrivals/p1', compact('count', 'cart'));
    }

    public function p2()
    {
        $user=auth()->user();

        $cart=cart::where('phone',$user->phone)->get();
         
        $count=cart::where('phone',$user->phone)->count();
        

         return view('user/newarrivals/p2', compact('count', 'cart'));
    }

    public function p3()
    {
        $user=auth()->user();

        $cart=cart::where('phone',$user->phone)->get();
         
        $count=cart::where('phone',$user->phone)->count();
        

         return view('user/newarrivals/p3', compact('count', 'cart'));
    }

    public function p4()
    {
        $user=auth()->user();

        $cart=cart::where('phone',$user->phone)->get();
         
        $count=cart::where('phone',$user->phone)->count();
        

         return view('user/newarrivals/p4', compact('count', 'cart'));
    }

    public function p5()
    {
        $user=auth()->user();

        $cart=cart::where('phone',$user->phone)->get();
         
        $count=cart::where('phone',$user->phone)->count();
        

         return view('user/newarrivals/p5', compact('count', 'cart'));
    }
}

