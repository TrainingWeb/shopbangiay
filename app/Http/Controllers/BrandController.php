<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::get();
        return view('/contentadmin.brands.index', compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/contentadmin.brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brand = New Brand;
        $brand->name = request()->input('name');
        $brand->brandslug = request()->input('brandslug');
        $brand->save();
        
        return redirect('/listbrands')->with('thongbao','Just created '. $brand->name. '');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brands = Brand::find($id);
<<<<<<< HEAD
        return view('/listbrands.edit', compact('brands'));
=======
        return view('/contentadmin.brands.edit', compact('brands'));
>>>>>>> 02635901fa4cbed63adab75765aa0a657e20da7a
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand, $id)
    {
<<<<<<< HEAD
        $brand = Brand::find($id);
        $brand->name = request()->input('name');
        $brand->brandslug = request()->input('brandslug');
        $brand->update();
=======
        $brands = Brand::find($id);
        $inputs = $request->all();
        $brands->update($inputs);
        return redirect('/listbrands')->with('thongbao','Just edited '. $brands->name. '');
>>>>>>> 02635901fa4cbed63adab75765aa0a657e20da7a
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brands = Brand::find($id);
        $brands->delete();

        return redirect('/listbrands');
    }
}
