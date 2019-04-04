<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class UserController extends Controller
{

	public function __construct()
    {
        $this->middleware('auth');
    }


    public function trackOrder()
    {
        return view('/user/track');
    }

    public function showProduct()
    {
        return view('/user/product');
    }

    public function CheckoutPage()
    {
        return view('/user/checkout');
    }

    public function showDetailsProduct()
    {
        return view('/user/product-details');
    }

    public function showCart()
    {
        return view('/user/cart');
    }

    public function showProfile()
    {
        $dataUser = DB::table('users')->select('users.*')
        ->get();
        return view('/user/profile',compact('dataUser'));
    }

}
