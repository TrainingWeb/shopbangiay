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
        return view('admin.products.index', compact('products'));
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
        return view('admin.products.create', compact('products','brands'));
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
            'image' => 'required',
            'price' => 'required',
            'productslug' => 'required',
            'gender' => 'required',
        ],[
            'name.required' => 'Bạn chưa nhập tên người dùng',
            'image.required' => 'Bạn chưa chọn ảnh',
            'price.required' => 'Bạn chưa nhập giá',
            'productslug.required' => 'Bạn chưa nhập slug',
            'gender.required' => 'Bạn chưa nhập giới tính',
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
        //
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
        return view('admin.products.edit', ['products'=>$products, 'brands'=>$brands]);
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
            'productslug' => 'required',
            'image' => 'required',
            'price' => 'required',
            'gender' => 'required',
        ],[
            'name.required' => 'Bạn chưa nhập tên người dùng',
            'productslug.required' => 'Bạn chưa nhập slug',
            'image.required' => 'Bạn chưa chọn ảnh',
            'price.required' => 'Bạn chưa nhập giá',
            'gender.required' => 'Bạn chưa nhập giới tính',
        ]);

        $product = Product::find($id);  
        $inputs = $request->all();
        $product->update($inputs);
        $file ;
        // dd($inputs['image']);
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $file->move('./images',$file->getClientOriginalName('image'));
        }
        $image = $file->getClientOriginalName('image');
        // dd($image   );
        $product->image = $image;
        $product->save();
        return redirect('/listproducts')->with('thongbao','Just edited '. $products->name. '');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::find($id);
        $products->delete();

        return redirect('/listproducts');
    }
}
