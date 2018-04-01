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

Route::resource('/listproducts', 'ProductController');

Route::resource('/listbrands', 'BrandController');

Route::resource('/listusers', 'UserController');

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/male', 'PageController@getMale');

Route::get('/female', 'PageController@getFemale');

Route::get('/brands/{id}','PageController@getBrand');

Route::get('/{id}/{productslug}', 'PageController@getDetail');

Route::get('/listproduct','PageController@getAll');

Route::get('/about', 'Pagecontroller@getAbout');

Route::get('/homepage', 'Pagecontroller@getHomepage');

Route::get('/contact', 'Pagecontroller@getContact');

Route::get('/checkout', 'PageController@getCheckout');

Route::get('/test', 'PageController@getNike');

Route::get('/login', 'PageController@getLogin');

Route::post('/postlogin', 'PageController@postLogin');

Route::get('/search', 'PageController@search');



