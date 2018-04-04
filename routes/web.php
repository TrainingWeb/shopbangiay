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
Auth::routes();

Route::resource('/listproducts', 'ProductController');

Route::resource('/listbrands', 'BrandController');

Route::resource('/listusers', 'UserController');

Route::get('/male', 'PageController@getMale');

Route::get('/female', 'PageController@getFemale');

Route::get('/brands/{id}','PageController@getBrand');

Route::get('/listproduct','PageController@getAll');

Route::get('/about', 'Pagecontroller@getAbout');

Route::get('/', 'Pagecontroller@getHomepage');

Route::get('/contact', 'Pagecontroller@getContact');

Route::get('/add-to-cart/{id}', 'PageController@addTocart')->name('addtocart');

Route::get('/delete-cart/{id}', 'PageController@deleteCart')->name('deletecart');

Route::get('/checkout', 'PageController@getCheckout')->name('checkout');

Route::post('/postcheckout', 'PageController@postCheckout')->name('postcheckout');

Route::get('/logincustomer', 'PageController@getLogin');

Route::post('/postlogin', 'PageController@postLogin');

Route::get('/search', 'PageController@search');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/{id}/{productslug}', 'PageController@getDetail');

Route::get('/admin', 'AdminController@getIndex');

Route::get('/listorders/{id}/delete', 'OrderController@deleteOrder');

Route::get('/listorders', 'OrderController@getIndex');

Route::get('/listorderdetails', 'OrderDetailController@getIndex');

Route::get('/listfeedbacks', 'FeedbackController@getIndex');

Route::get('/postfeedback', 'FeedbackController@add')->name('postfeedback');
