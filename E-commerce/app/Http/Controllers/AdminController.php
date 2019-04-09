<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Images;
use App\Discount;
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


        if ($request->hasFile('images')) {
            $allowedfileExtension=['jpeg','jpg','png','bmp'];
            $files = $request->file('images');
            foreach ($files as $file) {
                $image_name = $file->getClientOriginalName();
                $extension = $file->getClientOriginalExtension();
                $check=in_array($extension,$allowedfileExtension);
            }
            if ($check) {
                $product = Product::create($request->all());
                foreach ($request->images as $image) {
                    $image_name = $image->store('images');
                    Images::create([
                        'product_id'=>$product->id,
                        'image_name'=>$image_name
                    ]);
                }
                if ($request->get('mycheckbox')) {
                    Discount::create([
                        'id_product'=>$product->id,
                        'percentage'=>$request->input('percentage'),
                        'start'=>$request->input('start'),
                        'end'=>$request->input('end')
                    ]);
                }
            }
        }
        return redirect('list-product')->with('success','Successfully input');
    }
}
