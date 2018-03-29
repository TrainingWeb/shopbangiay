<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;

class PageController extends Controller
{
    public function getMale()
    {
        $products = Product::where('gender', 'male')->get();
        $brands = Brand::get();
        return view('/pages.listproduct', compact('products', 'brands'));
    }

    public function getFemale()
    {
        $products = Product::where('gender', 'female')->get();
        $brands = Brand::get();
        return view('/pages.listproduct', compact('products', 'brands'));
    }
    
    // public function getAdidas()
    // {
    //     $products = Product::where('id_brand', 6)->get();
    //     $brands = Brand::get();
    //     return view('/pages.listproduct', compact('products', 'brands'));
    // }

    // public function getNike()
    // {
    //     $products = Product::where('id_brand', 7)->get();
    //     $brands = Brand::get();
    //     return view('/pages.listproduct', compact('products', 'brands'));
    // }

    // public function getPuma()
    // {
    //     $products = Product::where('id_brand', 8)->get();
    //     $brands = Brand::get();
    //     return view('/pages.listproduct', compact('products', 'brands'));
    // }
    
    public function getDetail(Request $Request)
    {
        $products = Product::where('id', $Request->id)->first();
        $brands = Brand::all();
        return view('pages.detail', compact('products', 'brands'));
    }

    public function getBrand($id)
    {
        $products = Product::where('id_brand', $id)->get();
        $gettitle = Brand::where('id', $id)->get();
        $brands = Brand::get();
        return view('/pages.listproduct', compact('products', 'brands', 'gettitle'));
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
}
