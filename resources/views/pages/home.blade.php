@extends('layouts.page') 
@section('title', 'Home') 
@section('content')
<!-- Phần Content -->
<div class="content" style="overflow:hidden">
    <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 list p-0">
            <div class="centered w-100 text-center">
                <h1 class="shosee display-3 font-weight-bold mt-3 ">SHOSE</h1>
                <h3 class="fashion">FASHION</h3>
                <form action="/listproduct">
                    <button type="submit" class="btn btn-outline-secondary shop-now">SHOP NOW</button>
                </form>
            </div>
            <img src="images/list-pro.jpg" class="w-100" style="object-fit:cover;height:100vh">
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6">
            <div class="row">
                <div class="col-sm-12 col-md-4 list p-0">
                    <div class="centered w-100 text-center">
                        <h1 class="shose">NIKE</h1>
                        <form action="/brands/6">
                        <button type="submit" class="btn btn-outline-secondary shop-now1">SHOP NOW</button>
                        </form>
                    </div>
                    <img src="images/2.jpg" class="w-100" 1 style="object-fit:cover ; height:50vh">
                </div>
                <div class="col-sm-12 col-md-4  p-0">
                    <div class="centered w-100 text-center">
                        <h1 class="shose">ADIDAS</h1>
                        <form action="/brands/7">
                        <button type="submit" class="btn btn-outline-secondary shop-now1">SHOP NOW</button>
                        </form>
                    </div>
                    <img src="images/1.jpg" class="w-100" style="object-fit:cover ; height:50vh">
                </div>
                <div class="col-sm-12 col-md-4 p-0">
                    <div class="centered w-100 text-center">
                        <h1 class="shose">PUMA</h1>
                        <form action="/brands/8">
                        <button type="submit" class="btn btn-outline-secondary shop-now1">SHOP NOW</button>
                        </form>
                    </div>
                    <img src="images/3.jpg" class="w-100" style="object-fit:cover ;height:50vh">
                </div>
                <div class="col-sm-12 col-md-8 p-0">
                    <div class="centered w-100 text-center">
                        <h1 class="shose">MALE</h1>
                        <form action="/male">
                        <button type="submit" class="btn btn-outline-secondary shop-now1">SHOP NOW</button>
                        </form>
                    </div>
                    <img src="images/mn.jpg" class="w-100" style="height:50vh; object-fit:cover">
                </div>
                <div class="col-sm-12 col-md-4 p-0">
                    <div class="centered w-100 text-center">
                        <h1 class="shose">FAMALE</h1>
                        <form action="/female">
                        <button type="submit" class="btn btn-outline-secondary shop-now1">SHOP NOW</button>
                        </form>
                    </div>
                    <img src="images/nu.jpg" class="w-100" style="height:50vh; object-fit:cover">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hết phần Content -->
@endsection