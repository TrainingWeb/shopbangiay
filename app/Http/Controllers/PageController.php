<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;
use App\User;

class PageController extends Controller
{
    public function getMale()
    {
        $products = Product::where('gender', 'male')->get();
        $brands = Brand::get();
        $gender = $products[0]->gender;
        return view('/pages.listproductgender', compact('products', 'brands', 'gender'));
    }

    public function getFemale()
    {
        $products = Product::where('gender', 'female')->get();
        $brands = Brand::get();
        $gender = $products[0]->gender;
        return view('/pages.listproductgender', compact('products', 'brands', 'gender'));
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
        $users = User::get();
        $brands = Brand::get();
        return view('/pages.login', compact('users', 'brands'));
    }
}
