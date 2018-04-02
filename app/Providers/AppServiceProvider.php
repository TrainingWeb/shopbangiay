<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Brand;
use App\Cart;
use Session;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer(['layouts.header','/pages.checkout'],function($view){
            if(Session('cart')){
                $oldCart = Session::get('cart');
                $cart = New Cart($oldCart);
                $view->with(['cart'=>Session::get('cart'),'product_cart'=>$cart->items, 'totalPrice'=>$cart->totalPrice, 'totalQty'=>$cart->totalQty]);
        }
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
