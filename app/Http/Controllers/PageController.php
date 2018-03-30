<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;
use Cart;

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
        return view('pages.detail', compact('products', 'brands'));
    }

    public function getBrand($id)
    {
        $products = Product::where('id_brand', $id)->get();
        $brands = Brand::get();
        return view('/pages.listproduct', compact('products', 'brands'));
    }

    public function getAll()
    {
        $products = Product::all();
        $brands = Brand::get();
        return view('/pages.listproduct', compact('products', 'brands'));
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



    // 
    public function getCart($id){
        $product_byID = Product::where('id',$id)->fist();
        Cart::add(array('id'=>$id,$id));
    }
}
