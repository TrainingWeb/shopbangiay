<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Brand;

class PageController extends Controller
{
    public function getMen()
    {
        $products = Product::where('gender', 'male')->get();
        $brands = Brand::get();
        return view('/pages.listproduct', compact('products', 'brands'));
    }

    public function getDetail(Request $Request)
    {
        $products = Product::where('id', $Request->id)->first();
        $brands = Brand::all();
        return view('pages.detail', compact('products', 'brands'));
    }

    public function getBrand($id)
    {
        $products = Product::where('id_brand', $id)->get();
        $brands = Brand::get();
        return view('/pages.listproduct', compact('products', 'brands'));
    }
}
