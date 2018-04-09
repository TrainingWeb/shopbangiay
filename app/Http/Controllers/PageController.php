<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Brand;
use App\User;
use App\Order;
use App\OrderDetail;
use App\Cart;
use App\Comment;
use App\Providers\AppServiceProvider;

class PageController extends Controller
{
    public function getMale()
    {
        $products = Product::where('gender', 'male')->paginate(16);
        $brands = Brand::get();
        $title = "Male";
        return view('/pages.listproduct', compact('products', 'brands', 'title'));
    }

    public function getFemale()
    {
        $products = Product::where('gender', 'female')->paginate(16);
        $brands = Brand::get();
        $title = "Female";
        return view('/pages.listproduct', compact('products', 'brands', 'title'));
    }

    public function getDetail($productlug, $id)
    {
        $products = Product::where('id', $id)->first();
        $comments = Comment::where('id_product', $id)->get();
        $brands = Brand::get();
        $title = $products->name;
        return view('pages.detail', compact('products', 'brands', 'title', 'comments'));
    }

    public function getBrand($id)
    {
        $products = Product::where('id_brand', $id)->paginate(16);
        $brands = Brand::get();
        $title = $products[0]->brand->name;
        return view('/pages.listproduct', compact('products', 'brands', 'title'));
    }

    public function getAll()
    {
        $products = Product::paginate(16);
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

    public function postLogin(request $request)
    {
        if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password]))
    {
        return redirect('/admin');
    }
        else
        {
        return redirect()->back()->with('thongbao', 'Login failed, email or password is not correct !');
    }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/logincustomer');
    }


    public function postUser(Request $Request)
    {
        $Request->validate([
            'name' => 'required',
            'password' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'role' => 'required',
            'email' => 'required'
        ],[
            'name.required' => 'Please enter name',
            'password.required' => 'Please enter password',
            'address.required' => 'Please enter address',
            'phone.required' => 'Please enter phone number',
            'role.required' => 'Please enter role',
            'email.required' => 'Please enter email',
        ]);
        $users = New User;
        $users->name = request()->input('name');
        $users->password = bcrypt(request()->input('password'));
        $users->address = request()->input('address');
        $users->phone = request()->input('phone');
        $users->role = request()->input('role');
        $users->email = request()->input('email');

        $users->save();

        return redirect('/logincustomer')->with('success', 'Sign Up Success ! Now, enter your new account here');
    }
    
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
        if(!Auth::check())
        {
        $user = New User;
        $user->name = $Request->name;
        $user->email = $Request->email;
        $user->address = $Request->address;
        $user->phone = $Request->phone;
        $user->save();
        }
        else
        {

        }

        $order = New Order;
        $order->id_user = Auth::user()->id;
        $order->total = $cart->totalPrice;
        $order->save();
        
        foreach($cart->items as $key => $value){
        $order_detail = New OrderDetail;
        $order_detail->id_order = $order->id;
        $order_detail->id_product = $key;
        $order_detail->quantity = $value['qty'];
        $order_detail->unit_price = ($value['price']/$value['qty']);
        
        $order_detail->save();
        }
        Session::forget('cart');
        return redirect('/listproduct')->with('notification','Ordered Successfully. Please continue to purchase !');
    }
}