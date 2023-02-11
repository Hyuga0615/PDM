<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sale;
use App\Models\Product;
use Cloudinary;
use Illuminate\Support\Facades\Auth;
use Stripe\Stripe;
use Stripe\Customer;
use Stripe\Charge;

class SaleController extends Controller
{
    public function index()
    {
        return view('/sales/index');
    }
    
    public function home(Product $product)
    {
        return view('/sales/home')->with(['products'=>$product->getPaginateByLimit(5)]);
    }
    
    public function sell()
    {
        return view('/sales/sell');
    }
    
    public function upload(Request $request , Product $product)
    {
        
        $image = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();
        $product->image=$image;
        
        $product->name_item=$request->name_item; //$product->name_item(カラム)=$request->name_item(blade);
        $product->category=$request->category;
        $product->price=$request->price;
        $product->description=$request->description;
        $product->save();
        return redirect()->route('home');
    }
    
    public function show(Product $product)
    {
        return view('/sales/show')->with(['product'=>$product]);
        //'sale'はbladeで使う変数。$peoductはid=1のインスタンス。
    }
    
    public function payment(Request $request)
    {
        try
        {
            Stripe::setApiKey(env('STRIPE_SECRET'));

            $customer = Customer::create(array(
                'email' => $request->stripeEmail,
                'source' => $request->stripeToken
            ));

            $charge = Charge::create(array(
                'customer' => $user->id,
                'amount' => $product->price,
                'currency' => 'jpy'
            ));

            return redirect()->route('/sales/complete');
        }
        catch(Exception $e)
        {
            return $e->getMessage();
        }
    }

    public function complete()
    {
        return view('/sales/complete');
    }
    
}
