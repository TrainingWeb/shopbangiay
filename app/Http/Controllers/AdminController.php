<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Product;
use App\User;
use App\Order;

class AdminController extends Controller
{
    public function getIndex()
    {
        $brand = Brand::get();
        $product = Product::get();
        $users = User::get();
        $order = Order::Get();
        return view('/contentadmin.dashboard', compact('brand', 'product', 'users', 'order'));
    }
}
