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

Route::get('/', function () {
    return view('index');
});
Route::resource('/listproducts', 'ProductController');

Route::resource('/listbrands', 'BrandController');

Route::resource('/listusers', 'UserController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
<<<<<<< HEAD
Route::get('/list-product', function () {
return view('pages.detail');
});

=======

// Route::get('home')
// test thu
>>>>>>> ad85e5cbaba50e4b2448e76b4bf4f49fe87ada87
