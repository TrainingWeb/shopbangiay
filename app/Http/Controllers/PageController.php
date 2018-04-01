<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Brand;
use App\User;

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

    public function getCheckout()
    {
        $brands = Brand::get();
        return view('/pages.checkout', compact('brands'));
        
    }

    public function getLogin()
    {
        $brands = Brand::get();
        return view('/pages.login', compact('brands'));
    }
    public function postLogin(Request $request)
    {
        $login = [
            'email'=> $request->email,
            'password'=> $request->password,
            'role'=> 'admin'
        ];
        if(Auth::attempt($login)){
            return redirect('/listproducts');
        }else{
            return redirect('/login')->with('thongbao', 'Dang nhap that bai');
        }
    }

    

}
