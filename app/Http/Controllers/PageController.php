<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Brand;
use App\User;
use App\Order;
use App\OrderDetail;
use Session;
use App\Cart;
use App\Providers\AppServiceProvider;

class PageController extends Controller
{
    public function getMale()
    {
        $products = Product::where('gender', 'male')->get();
        $brands = Brand::get();
        $title = "Male";
        return view('/pages.listproduct', compact('products', 'brands', 'title'));
    }

    public function getFemale()
    {
        $products = Product::where('gender', 'female')->get();
        $brands = Brand::get();
        $title = "Female";
        return view('/pages.listproduct', compact('products', 'brands', 'title'));
    }

    public function getDetail(Request $Request)
    {
        $products = Product::where('id', $Request->id)->first();
        $brands = Brand::get();
        $title = $products->name;
        return view('pages.detail', compact('products', 'brands', 'title'));
    }

    public function getBrand($id)
    {
        $products = Product::where('id_brand', $id)->get();
        $brands = Brand::get();
        $title = $products[0]->brand->name;
        return view('/pages.listproduct', compact('products', 'brands', 'title'));
    }

    public function getAll()
    {
        $products = Product::all();
        $brands = Brand::get();
        $title = 'List Product';
        return view('/pages.listproduct', compact('products', 'brands', 'title'));
    }

    public function search()
    {
        $name = request()->input('name');
        $products = Product::where([
            ['name', 'LIKE', '%'. $name .'%'],
        ])->get();
        $title = 'Searchingg...';
        $brands = Brand::get();
        return view('/pages.listproduct', compact('products', 'title', 'brands'));
    }

    public function getAbout()
    {
        $brands = Brand::get();
        return view('/pages.about', compact('brands'));
    }

    public function getHomepage()
    {
        $brands = Brand::get();
        return view('/pages.home', compact('brands'));
    }

    public function getContact()
    {
        $brands = Brand::get();
        return view('/pages.contact', compact('brands'));
    }

    public function getLogin()
    {
        $brands = Brand::get();
        return view('/pages.login', compact('brands'));
    }
    // public function postLogin(Request $request)
    // {
    //     $login = [
    //         'email'=> $request->email,
    //         'password'=> $request->password,
    //     ];
    //     if(Auth::attempt($login)){
    //         return redirect('/listproducts');
    //     }else{
    //         return redirect('/logincustomer')->with('thongbao', 'Dang nhap that bai');
    //     }
    // }

    

    public function addTocart(Request $Request, $id)
    {
        $product = Product::find($id);
        $oldCart = Session('cart')?Session::get('cart'):null;
        $cart = New Cart($oldCart);
        $cart->add($product, $id);
        $Request->session()->put('cart',$cart);
        return redirect()->back();
    }

    public function deleteCart($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart = New Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items)>0){
        Session::put('cart',$cart);
        }
        else{
        Session::forget('cart');
        }
        return redirect()->back();
    }

    public function getCheckout()
    {
        $brands = Brand::get();
        return view('/pages.checkout', compact('brands'));
        
    }

    public function postCheckout(Request $Request)
    {
        $cart = Session::get('cart');
        $user = New User;
        $user->name = $Request->name;
        $user->email = $Request->email;
        $user->address = $Request->address;
        $user->phone = $Request->phone;
        $user->save();

        $order = New Order;
        $order->id_user = $user->id;
        $order->total = $cart->totalPrice;
        $order->save();

        foreach($cart['items'] as $key => $value){
        $order_detail = New OrderDetail;
        $order_detail->id_order = $order->id;
        $order_detail->id_product = $product->id;
        $order_detail->quantity = $value['qty'];
        $order_detail->unit_price = ($value['price']/$value['qty']);
        
        $order_detail->save();
        }
    }


    

}
