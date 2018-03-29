<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Brand;
Route::get('/', function () {
    return view('index');
});
Route::resource('/listproducts', 'ProductController');

Route::resource('/listbrands', 'BrandController');

Route::resource('/listusers', 'UserController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/men', 'PageController@getMen');

Route::get('/{id}/detail', 'PageController@getDetail');

Route::get('/brands/{id}','PageController@getBrand');

Route::get('/home', function(){
    $brands = Brand::get();
    return view('/pages.home', compact('brands'));
});


Route::get('/list-product', function () {
return view('pages.detail');
});

Route::get('/contact', function(){
    return view('pages.contact');
});
