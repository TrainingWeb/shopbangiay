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

Route::get('/male', 'PageController@getMale');

Route::get('/female', 'PageController@getFemale');

Route::get('/adidas', 'PageController@getAdidas');

Route::get('/nike', 'PageController@getNike');

Route::get('/puma', 'PageController@getPuma');

Route::get('/{id}/detail', 'PageController@getDetail');

Route::get('/brands/{id}','PageController@getBrand');

Route::get('/listproduct','PageController@getAll');

Route::get('/about', 'Pagecontroller@getAbout');

Route::get('/homepage', 'Pagecontroller@getHomepage');

Route::get('/contact', 'Pagecontroller@getContact');

Route::get('/checkout', 'PageController@getCheckout');

Route::get('/customerlogin', function(){
    $brands = Brand::get();
    return view('/pages.login', ['brands'=>$brands]);
});

Route::post('/login', 'AuthController@postLogin')->name('login');
