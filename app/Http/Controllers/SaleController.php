<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\Product;
use Cloudinary;

class SaleController extends Controller
{
    public function index()
    {
        return view('/sales/index');
    }
    
    public function home(Product $product)
    {
        return view('/sales/home')->with(['products'=>$product->get()]);
    }
    
    public function sell()
    {
        return view('/sales/sell');
    }
    
    public function upload(Request $request , Product $product)
    {
        $input = $request['post'];
        $image = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $input += ['image' => $image];  
        $product->image=$request->image;
        $product->name_item=$request->name_item; //$product->name_item(カラム)=$request->name_item(blade);
        $product->category=$request->category;
        $product->price=$request->price;
        $product->description=$request->description;
        $product->save();
        return redirect()->route('home');
    }
}
