<?php

namespace App\Http\Controllers;

use App\Product;
use App\Brand;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::get();
        return view('contentadmin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::get();
        $brands = Brand::get();
        return view('contentadmin.products.create', compact('products','brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'productslug' => 'required',
            'gender' => 'required',
            'description' => 'required',
            'image' => 'required',
            'brand' => 'required',
        ],[
            'name.required' => 'Please enter product name',
            'price.required' => 'Please enter product price',
            'productslug.required' => 'Please enter product slug',
            'gender.required' => 'Please enter gender of product',
            'description.required' => 'Please enter product description',
            'image.required' => 'Please enter product image',
            'brand.required' => 'Please enter brand of product',
        ]);

        $products = New Product;
        $products->name = request()->input('name');
        $products->price = request()->input('price');
        $products->productslug = request()->input('productslug');
        $products->gender = request()->input('gender');
        $products->description = request()->input('description');
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $file->move('./images',$file->getClientOriginalName('image'));
        }
        $image = $file->getClientOriginalName('image');
        $products->image = $image;
        $products->id_brand = request()->input('brand');
        $products->save();
        return redirect('/listproducts')->with('thongbao','Just created '. $products->name. '');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $products = Product::find($id);
        $brands = Brand::get();
        return view('contentadmin.products.edit', ['products'=>$products, 'brands'=>$brands]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
            'productslug' => 'required',
            'gender' => 'required',
            'description' => 'required',
            'image' => 'required',
            'brand' => 'required',
        ],[
            'name.required' => 'Please enter product name',
            'price.required' => 'Please enter product price',
            'productslug.required' => 'Please enter product slug',
            'gender.required' => 'Please enter gender of product',
            'description.required' => 'Please enter product description',
            'image.required' => 'Please enter product image',
            'brand.required' => 'Please enter brand of product',
        ]);

        $products = Product::find($id);  
        $inputs = $request->all();
        $products->update($inputs);
        $file ;
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $file->move('./images',$file->getClientOriginalName('image'));
        }
        $image = $file->getClientOriginalName('image');
        $products->image = $image;
        $products->save();
        return redirect('/listproducts')->with('thongbao','Just edited '. $products->name. '');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * 
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::find($id);
        $products->delete();

        return redirect('/listproducts');
    }
}
