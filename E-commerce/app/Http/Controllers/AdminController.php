<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Admin/dashboard');
    }

    public function productList()
    {
        $products = DB::table('products')->get();
        return view('Admin/productList',compact('products'));
    }

    public function inputProduct()
    {
        $list = DB::table('product_categories')->get();
        return view('Admin/inputProduct',compact('list'));
    }

    public function listCourier()
    {
        $courier = DB::table('couriers')->get();
        return view('Admin/courier',compact('courier'));
    }

    public function listCategories()
    {
        $category = DB::table('product_categories')->get();
        return view('Admin/productCategory',compact('category'));
    }

    public function addCategory(Request $request)
    {

        $category_name = $request->category_name;

        DB::table('product_categories')->insert(
            [
            'category_name' => $category_name,
            ]
        );

        return redirect()->back()->with('success','Successfully input');
    }

    public function addCourier(Request $request)
    {

        $courier = $request->courier;

        DB::table('couriers')->insert(
            [
            'courier' => $courier,
            ]
        );

        return redirect()->back()->with('success','Successfully input');
    }

    public function store(Request $request){


        $product = new Product();

        $product->product_name = $request->product_name;
        $product->price = $request->price;
        $product->description = $request->description;
        $product->stock = $request->stock;
        $product->weight = $request->weight;


        // if ($request->hasFile('profile_image')) {
        //     $profile_image = $request->file('profile_image');
        //     $name = str_slug($request->title).'.'.$profile_image->getClientOriginalName();
        //     $destinationPath = public_path('/uploads/User');
        //     $imagePath = $destinationPath. "/".  $name;
        //     $profile_image->move($destinationPath, $name);
        //     $product->profile_image = $name;
        // }else{
        //     $images = scandir(public_path('/uploads/User'));
        //     $name = str_slug($request->title).'.'.'default.png';
        //     $product->profile_image = $name;
        // }


        $product->save();
        return redirect()->back()->with('success','Successfully input');
    }
}
