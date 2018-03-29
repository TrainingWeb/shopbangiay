{{--  thừa kế từ trang page.blade.php  --}}
@extends('layouts.page')

{{--  Tên trang  --}}
@section('title', 'List products')

{{--  phần thân login  --}}
@section('content')


<!-- Danh sách sản phẩm -->
        <div class="contain">
            <div class="row">
                <div class="col-lg-4 p-0">
                    <a href="#">
                        <img class="w-100" src="images/list-img.jpg" alt="">
                    </a>
                </div>
                <div class="col-lg-8" >
                    <div class="container pt-4">
                        <h1 class="title-contain">WOMEN</h1>
                        <!-- Form select catagory -->
                        <div class="form-group d-flex">
                            <select class="form-control col-lg-3 col-6 rounded-0 border-0" id="exampleFormControlSelect1" style="background-color:#ebebeb; font-weight:700;">
                                <option>BRAND</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                            </select>
                            <ul class="nav nav-pills ml-auto float-right justify-content-end" id="pills-tab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
                                        aria-selected="true">
                                        <i class="fas fa-bars"></i>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile"
                                        aria-selected="false">
                                        <i class="fas fa-list-ul"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Hiện danh sách sản phẩm -->

                        <div class="tab-content" id="pills-tabContent">
                            {{--  hiện theo list dọc  --}}
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="home-tab">
                                <div class="container pl-0">
                                    <div class="row scroll-list pl-2">
                                        <div class="col-lg-3 p-1">
                                            <div class="card hover-card">
                                                <img class="w-100" src="images/shoe1.jpg" style="height:200px!important; object-fit:cover ; display: block;" alt="">
                                                <div class="text-hover d-flex align-self-end">
                                                    <div class="align-self-end text-center w-100">
                                                        <h6 class="pb-2">
                                                            <small class="text-white">Add To Whishlist</small>
                                                        </h6>
                                                        <!-- Thêm sản phẩm vào giỏ hàng-->
                                                        <a href="#" class="incon-link p-2 bg-white mr-2">
                                                            <i class="fas fa-gift text-dark contact-hover"></i>
                                                        </a>
                                                        <a href="#" class="incon-link p-2 bg-white">
                                                            <i class="fas fa-heart text-dark contact-hover"></i>
                                                        </a>
                                                        <!-- Show tên và giá tiền sản phẩm -->
                                                        <h6 class="mt-3 title-card text-white">POSURERE AT ULTRICIES </h6>
                                                        <h4 class="text-white">$550</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 p-1">
                                            <div class="card hover-card">
                                                <img class="w-100" src="images/shoe1.jpg" style="height:200px!important; object-fit:cover ; display: block;" alt="">
                                                <div class="text-hover d-flex align-self-end">
                                                    <div class="align-self-end text-center w-100">
                                                        <h6 class="pb-2">
                                                            <small class="text-white">Add To Whishlist</small>
                                                        </h6>
                                                        <!-- Thêm sản phẩm vào giỏ hàng-->
                                                        <a href="#" class="incon-link p-2 bg-white mr-2">
                                                            <i class="fas fa-gift text-dark contact-hover"></i>
                                                        </a>
                                                        <a href="#" class="incon-link p-2 bg-white">
                                                            <i class="fas fa-heart text-dark contact-hover"></i>
                                                        </a>
                                                        <!-- Show tên và giá tiền sản phẩm -->
                                                        <h6 class="mt-3 title-card text-white">POSURERE AT ULTRICIES </h6>
                                                        <h4 class="text-white">$550</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                      
                                     
                                        
                                        
                                        <div class="col-lg-3 p-1">
                                            <div class="card hover-card">
                                                <img class="w-100" src="images/shoe1.jpg" style="height:200px!important; object-fit:cover ; display: block;" alt="">
                                                <div class="text-hover d-flex align-self-end">
                                                    <div class="align-self-end text-center w-100">
                                                        <h6 class="pb-2">
                                                            <small class="text-white">Add To Whishlist</small>
                                                        </h6>
                                                        <!-- Thêm sản phẩm vào giỏ hàng-->
                                                        <a href="#" class="incon-link p-2 bg-white mr-2">
                                                            <i class="fas fa-gift text-dark contact-hover"></i>
                                                        </a>
                                                        <a href="#" class="incon-link p-2 bg-white">
                                                            <i class="fas fa-heart text-dark contact-hover"></i>
                                                        </a>
                                                        <!-- Show tên và giá tiền sản phẩm -->
                                                        <h6 class="mt-3 title-card text-white">POSURERE AT ULTRICIES </h6>
                                                        <h4 class="text-white">$550</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 p-1">
                                            <div class="card hover-card">
                                                <img class="w-100" src="images/shoe1.jpg" style="height:200px!important; object-fit:cover ; display: block;" alt="">
                                                <div class="text-hover d-flex align-self-end">
                                                    <div class="align-self-end text-center w-100">
                                                        <h6 class="pb-2">
                                                            <small class="text-white">Add To Whishlist</small>
                                                        </h6>
                                                        <!-- Thêm sản phẩm vào giỏ hàng-->
                                                        <a href="#" class="incon-link p-2 bg-white mr-2">
                                                            <i class="fas fa-gift text-dark contact-hover"></i>
                                                        </a>
                                                        <a href="#" class="incon-link p-2 bg-white">
                                                            <i class="fas fa-heart text-dark contact-hover"></i>
                                                        </a>
                                                        <!-- Show tên và giá tiền sản phẩm -->
                                                        <h6 class="mt-3 title-card text-white">POSURERE AT ULTRICIES </h6>
                                                        <h4 class="text-white">$550</h4>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                             {{--  hiện theo list ngang tạm thời chưa đẹp  --}}
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="container pl-0">
                                    <div class="row scroll-list pl-2">
                                        <div class="col-lg-3 col-6 p-1">
                                            <img class="w-100" tyle="height:150px; object-fix:cover" src="images/shoes2.jpg" alt="">
                                        </div>
                                        <div class="col-lg-3 col-6">
                                             <!-- Show tên và giá tiền sản phẩm -->
                                             <h5 class="title-card  mt-1">POSURERE AT ULTRICIES </h5>
                                             <h4 class="">
                                                 <span class="color">$</span> 550</h4>
                                             <h6 class="pb-1">
                                                 <small class="">Add To Whishlist</small>
                                             </h6>
                                             <a href="#" class="incon-link p-2 bg-white mr-2">
                                                 <i class="fas fa-gift text-dark contact-hover"></i>
                                             </a>
                                             <a href="#" class="incon-link p-2 bg-white">
                                                 <i class="fas fa-heart text-dark contact-hover"></i>
                                             </a>
                                        </div>

                                        <div class="col-lg-3 col-6 p-1 ">
                                            <img class="w-100" style="height:150px; object-fix:cover" src="images/shoes2.jpg" alt="">
                                        </div>
                                        <div class="col-lg-3 col-6">
                                            <!-- Show tên và giá tiền sản phẩm -->
                                            <h5 class="title-card  mt-1">POSURERE AT ULTRICIES </h5>
                                            <h4 class="">
                                                <span class="color">$</span> 550</h4>
                                            <h6 class="pb-1">
                                                <small class="">Add To Whishlist</small>
                                            </h6>
                                            <a href="#" class="incon-link p-2 bg-white mr-2">
                                                <i class="fas fa-gift text-dark contact-hover"></i>
                                            </a>
                                            <a href="#" class="incon-link p-2 bg-white">
                                                <i class="fas fa-heart text-dark contact-hover"></i>
                                            </a>
                                        </div>
                                        <div class="col-lg-3 col-6 p-1">
                                            <img class="w-100" tyle="height:150px; object-fix:cover" src="images/shoes2.jpg" alt="">
                                        </div>
                                        <div class="col-lg-3 col-6">
                                             <!-- Show tên và giá tiền sản phẩm -->
                                             <h5 class="title-card  mt-1">POSURERE AT ULTRICIES </h5>
                                             <h4 class="">
                                                 <span class="color">$</span> 550</h4>
                                             <h6 class="pb-1">
                                                 <small class="">Add To Whishlist</small>
                                             </h6>
                                             <a href="#" class="incon-link p-2 bg-white mr-2">
                                                 <i class="fas fa-gift text-dark contact-hover"></i>
                                             </a>
                                             <a href="#" class="incon-link p-2 bg-white">
                                                 <i class="fas fa-heart text-dark contact-hover"></i>
                                             </a>
                                        </div>
                                        <div class="col-lg-3 col-6 p-1">
                                            <img class="w-100" tyle="height:150px; object-fix:cover" src="images/shoes2.jpg" alt="">
                                        </div>
                                        <div class="col-lg-3 col-6">
                                             <!-- Show tên và giá tiền sản phẩm -->
                                             <h5 class="title-card  mt-1">POSURERE AT ULTRICIES </h5>
                                             <h4 class="">
                                                 <span class="color">$</span> 550</h4>
                                             <h6 class="pb-1">
                                                 <small class="">Add To Whishlist</small>
                                             </h6>
                                             <a href="#" class="incon-link p-2 bg-white mr-2">
                                                 <i class="fas fa-gift text-dark contact-hover"></i>
                                             </a>
                                             <a href="#" class="incon-link p-2 bg-white">
                                                 <i class="fas fa-heart text-dark contact-hover"></i>
                                             </a>
                                        </div>
                                        <div class="col-lg-3 col-6 p-1">
                                            <img class="w-100" tyle="height:150px; object-fix:cover" src="images/shoes2.jpg" alt="">
                                        </div>
                                        <div class="col-lg-3 col-6">
                                             <!-- Show tên và giá tiền sản phẩm -->
                                             <h5 class="title-card  mt-1">POSURERE AT ULTRICIES </h5>
                                             <h4 class="">
                                                 <span class="color">$</span> 550</h4>
                                             <h6 class="pb-1">
                                                 <small class="">Add To Whishlist</small>
                                             </h6>
                                             <a href="#" class="incon-link p-2 bg-white mr-2">
                                                 <i class="fas fa-gift text-dark contact-hover"></i>
                                             </a>
                                             <a href="#" class="incon-link p-2 bg-white">
                                                 <i class="fas fa-heart text-dark contact-hover"></i>
                                             </a>
                                        </div>
                                        <div class="col-lg-3 col-6 p-1">
                                            <img class="w-100" tyle="height:150px; object-fix:cover" src="images/shoes2.jpg" alt="">
                                        </div>
                                        <div class="col-lg-3 col-6">
                                             <!-- Show tên và giá tiền sản phẩm -->
                                             <h5 class="title-card  mt-1">POSURERE AT ULTRICIES </h5>
                                             <h4 class="">
                                                 <span class="color">$</span> 550</h4>
                                             <h6 class="pb-1">
                                                 <small class="">Add To Whishlist</small>
                                             </h6>
                                             <a href="#" class="incon-link p-2 bg-white mr-2">
                                                 <i class="fas fa-gift text-dark contact-hover"></i>
                                             </a>
                                             <a href="#" class="incon-link p-2 bg-white">
                                                 <i class="fas fa-heart text-dark contact-hover"></i>
                                             </a>
                                        </div>
                                        <div class="col-lg-3 col-6 p-1">
                                            <img class="w-100" tyle="height:150px; object-fix:cover" src="images/shoes2.jpg" alt="">
                                        </div>
                                        <div class="col-lg-3 col-6">
                                             <!-- Show tên và giá tiền sản phẩm -->
                                             <h5 class="title-card  mt-1">POSURERE AT ULTRICIES </h5>
                                             <h4 class="">
                                                 <span class="color">$</span> 550</h4>
                                             <h6 class="pb-1">
                                                 <small class="">Add To Whishlist</small>
                                             </h6>
                                             <a href="#" class="incon-link p-2 bg-white mr-2">
                                                 <i class="fas fa-gift text-dark contact-hover"></i>
                                             </a>
                                             <a href="#" class="incon-link p-2 bg-white">
                                                 <i class="fas fa-heart text-dark contact-hover"></i>
                                             </a>
                                        </div>
                                        <div class="col-lg-3 col-6 p-1">
                                            <img class="w-100" tyle="height:150px; object-fix:cover" src="images/shoes2.jpg" alt="">
                                        </div>
                                        <div class="col-lg-3 col-6">
                                             <!-- Show tên và giá tiền sản phẩm -->
                                             <h5 class="title-card  mt-1">POSURERE AT ULTRICIES </h5>
                                             <h4 class="">
                                                 <span class="color">$</span> 550</h4>
                                             <h6 class="pb-1">
                                                 <small class="">Add To Whishlist</small>
                                             </h6>
                                             <a href="#" class="incon-link p-2 bg-white mr-2">
                                                 <i class="fas fa-gift text-dark contact-hover"></i>
                                             </a>
                                             <a href="#" class="incon-link p-2 bg-white">
                                                 <i class="fas fa-heart text-dark contact-hover"></i>
                                             </a>
                                        </div>
                                        <div class="col-lg-3 col-6 p-1">
                                            <img class="w-100" tyle="height:150px; object-fix:cover" src="images/shoes2.jpg" alt="">
                                        </div>
                                        <div class="col-lg-3 col-6">
                                             <!-- Show tên và giá tiền sản phẩm -->
                                             <h5 class="title-card  mt-1">POSURERE AT ULTRICIES </h5>
                                             <h4 class="">
                                                 <span class="color">$</span> 550</h4>
                                             <h6 class="pb-1">
                                                 <small class="">Add To Whishlist</small>
                                             </h6>
                                             <a href="#" class="incon-link p-2 bg-white mr-2">
                                                 <i class="fas fa-gift text-dark contact-hover"></i>
                                             </a>
                                             <a href="#" class="incon-link p-2 bg-white">
                                                 <i class="fas fa-heart text-dark contact-hover"></i>
                                             </a>
                                        </div>
                                        <div class="col-lg-3 col-6 p-1">
                                            <img class="w-100" tyle="height:150px; object-fix:cover" src="images/shoes2.jpg" alt="">
                                        </div>
                                        <div class="col-lg-3 col-6">
                                             <!-- Show tên và giá tiền sản phẩm -->
                                             <h5 class="title-card  mt-1">POSURERE AT ULTRICIES </h5>
                                             <h4 class="">
                                                 <span class="color">$</span> 550</h4>
                                             <h6 class="pb-1">
                                                 <small class="">Add To Whishlist</small>
                                             </h6>
                                             <a href="#" class="incon-link p-2 bg-white mr-2">
                                                 <i class="fas fa-gift text-dark contact-hover"></i>
                                             </a>
                                             <a href="#" class="incon-link p-2 bg-white">
                                                 <i class="fas fa-heart text-dark contact-hover"></i>
                                             </a>
                                        </div>
                                        <div class="col-lg-3 col-6 p-1">
                                            <img class="w-100" tyle="height:150px; object-fix:cover" src="images/shoes2.jpg" alt="">
                                        </div>
                                        <div class="col-lg-3 col-6">
                                             <!-- Show tên và giá tiền sản phẩm -->
                                             <h5 class="title-card  mt-1">POSURERE AT ULTRICIES </h5>
                                             <h4 class="">
                                                 <span class="color">$</span> 550</h4>
                                             <h6 class="pb-1">
                                                 <small class="">Add To Whishlist</small>
                                             </h6>
                                             <a href="#" class="incon-link p-2 bg-white mr-2">
                                                 <i class="fas fa-gift text-dark contact-hover"></i>
                                             </a>
                                             <a href="#" class="incon-link p-2 bg-white">
                                                 <i class="fas fa-heart text-dark contact-hover"></i>
                                             </a>
                                        </div>
                                        <div class="col-lg-3 col-6 p-1">
                                            <img class="w-100" tyle="height:150px; object-fix:cover" src="images/shoes2.jpg" alt="">
                                        </div>
                                        <div class="col-lg-3 col-6">
                                             <!-- Show tên và giá tiền sản phẩm -->
                                             <h5 class="title-card  mt-1">POSURERE AT ULTRICIES </h5>
                                             <h4 class="">
                                                 <span class="color">$</span> 550</h4>
                                             <h6 class="pb-1">
                                                 <small class="">Add To Whishlist</small>
                                             </h6>
                                             <a href="#" class="incon-link p-2 bg-white mr-2">
                                                 <i class="fas fa-gift text-dark contact-hover"></i>
                                             </a>
                                             <a href="#" class="incon-link p-2 bg-white">
                                                 <i class="fas fa-heart text-dark contact-hover"></i>
                                             </a>
                                        </div>
                                        <div class="col-lg-3 col-6 p-1">
                                            <img class="w-100" tyle="height:150px; object-fix:cover" src="images/shoes2.jpg" alt="">
                                        </div>
                                        <div class="col-lg-3 col-6">
                                             <!-- Show tên và giá tiền sản phẩm -->
                                             <h5 class="title-card  mt-1">POSURERE AT ULTRICIES </h5>
                                             <h4 class="">
                                                 <span class="color">$</span> 550</h4>
                                             <h6 class="pb-1">
                                                 <small class="">Add To Whishlist</small>
                                             </h6>
                                             <a href="#" class="incon-link p-2 bg-white mr-2">
                                                 <i class="fas fa-gift text-dark contact-hover"></i>
                                             </a>
                                             <a href="#" class="incon-link p-2 bg-white">
                                                 <i class="fas fa-heart text-dark contact-hover"></i>
                                             </a>
                                        </div>
                                        <div class="col-lg-3 col-6 p-1">
                                            <img class="w-100" tyle="height:150px; object-fix:cover" src="images/shoes2.jpg" alt="">
                                        </div>
                                        <div class="col-lg-3 col-6">
                                             <!-- Show tên và giá tiền sản phẩm -->
                                             <h5 class="title-card  mt-1">POSURERE AT ULTRICIES </h5>
                                             <h4 class="">
                                                 <span class="color">$</span> 550</h4>
                                             <h6 class="pb-1">
                                                 <small class="">Add To Whishlist</small>
                                             </h6>
                                             <a href="#" class="incon-link p-2 bg-white mr-2">
                                                 <i class="fas fa-gift text-dark contact-hover"></i>
                                             </a>
                                             <a href="#" class="incon-link p-2 bg-white">
                                                 <i class="fas fa-heart text-dark contact-hover"></i>
                                             </a>
                                        </div>
                                        <div class="col-lg-3 col-6 p-1">
                                            <img class="w-100" tyle="height:150px; object-fix:cover" src="images/shoes2.jpg" alt="">
                                        </div>
                                        <div class="col-lg-3 col-6">
                                             <!-- Show tên và giá tiền sản phẩm -->
                                             <h5 class="title-card  mt-1">POSURERE AT ULTRICIES </h5>
                                             <h4 class="">
                                                 <span class="color">$</span> 550</h4>
                                             <h6 class="pb-1">
                                                 <small class="">Add To Whishlist</small>
                                             </h6>
                                             <a href="#" class="incon-link p-2 bg-white mr-2">
                                                 <i class="fas fa-gift text-dark contact-hover"></i>
                                             </a>
                                             <a href="#" class="incon-link p-2 bg-white">
                                                 <i class="fas fa-heart text-dark contact-hover"></i>
                                             </a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection