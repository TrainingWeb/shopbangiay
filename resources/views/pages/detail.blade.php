{{-- thừa kế từ trang page.blade.php --}} 
@extends('layouts.page') {{-- Tên trang --}} 
@section('title') {{$title}}
@endsection

{{-- phần thân login --}} 
@section('content')
<div class="contain">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active"><a href="/listproduct">List all Products</a></li>
            <li class="breadcrumb-item active">Detail {{$title}}</li>
        </ol>
        <div class="row py-3">
            <div class="col-lg-4">
                <img class="w-100 pb-3" style="object-fit:cover; width:300px" src="/images/{{$products[0]->image}}" alt="">
            </div>
            <div class="col-lg-8">
                <h4 class="title-detail">{{$products[0]->name}}</h4>
                <h4 class=" color title-detail ">${{number_format($products[0]->price)}}</h4>
                <p>{{$products[0]->description}}</p>
                <h6>Availability:
                    <span class="color"> In stock</span>
                </h6>
                <div class="form-group row m-0 pb-3">
                    {{--
                    <div class="col-lg-2 col-md-6 col-12 pb-2 pl-0">
                        <label for="inputPassword" class="col-form-label font-weight-bold">QUANTITY: </label>
                    </div>

                    <div class="col-lg-1 pl-0 col-3 pb-2">
                        <input type="text" class="form-control rounded-0" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="1">
                    </div> --}}
                    <div class="col pb-2 pl-0">
                        <a href="{{route('addtocart', $products[0]->id)}}" class="btn btn-warning bg-btn text-white rounded-0 py-2"> <i class="fas fa-cart-plus text-white"></i></a>
                        <a href="/listproduct" class="btn py-2 btn-warning bg-btn text-white rounded-0"> BACK TO STORE </a>
                    </div>

                </div>
                {{-- <a href="#" class="incon-link p-2 bg-white mr-2 border">
                        <i class="fas fa-gift text-dark contact-hover"></i>
                    </a>
                <a href="#" class="incon-link p-2 bg-white border">
                        <i class="fas fa-heart text-dark contact-hover"></i>
                    </a> --}}
            </div>
        </div>
        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
            <li class="nav-item mr-2 mb-2">
                <a class="nav-link nav-pill-detail active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home"
                    aria-selected="true">SAME PRODUCTS</a>
            </li>
            <li class="nav-item mr-2 mb-2">
                <a class="nav-link nav-pill-detail" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile"
                    aria-selected="false">MORE INFORMATION</a>
            </li>
            <li class="nav-item mr-2 mb-2">
                <a class="nav-link nav-pill-detail" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact"
                    aria-selected="false">REVIEW</a>
            </li>
        </ul>
        <div class="tab-content mb-5" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">


                <div class="container">
                    @foreach($productslike as $product)
                    <div class="col-md-3 float-left mb-3">
                        <div class="card hover-card">
                            <img class="w-100" src="/images/{{$product->image}}" style="height:200px!important; object-fit:cover ; display: block;" alt="">
                            <div class="text-hover d-flex align-self-end">
                                <div class="align-self-end text-center w-100">
                                    <h6 class="pb-2">
                                        <small class="text-white">Add To Whishlist</small>
                                    </h6>
                                    <!-- Thêm sản phẩm vào giỏ hàng-->
                                    <a href="{{route('addtocart', $product->id)}}" class="incon-link p-2 bg-white mr-2">
                                                                <i class="fas fa-cart-plus text-dark contact-hover"></i>
                                                            </a>
                                    <a href="/products/{{$product->productslug}}" class="incon-link p-2 bg-white">
                                                                <i class="fas fa-info-circle text-dark contact-hover"></i>
                                                            </a>
                                    <!-- Show tên và giá tiền sản phẩm -->
                                    <h6 class="mt-3 title-card text-white"><b style="font-size:20px">{{$product->name}}</b></h6>
                                    <h4 class="text-white">${{number_format($product->price)}}</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- {{ $productslike->links() }} --}}
                </div>
               
                <!-- 1 product-->

            </div>
            
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                Caelumque opifex pluviaque vultus videre. Indigestaque inminet montes nabataeaque circumdare iners. Campos unus habitabilis
                nondum cornua pluviaque. Forma pulsant sectamque supplex aberant! Crescendo lapidosos litem occiduo triones
                caelo locavit retinebat aethere.
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                {{-- comment start --}} @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
                @endif @if(Auth::check())
                <form action="/comment/{{$products[0]->id}}" method="post" class="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <label for="">Write comment</label>
                    <textarea class="col-md-12" name="content" cols="5" rows="2"></textarea>
                    <input class="form-control col-md-2 btn btn-primary float-right" type="submit" name="Comment">
                </form>
                @endif
                <div style="clear:both"></div>
                @foreach($comments as $cm)
                <div class="container">
                    <div class="row">
                        <div class="col-sm-1 mb-2">
                            <div class="thumbnail">
                                <img class="img-responsive user-photo" width="60" src="https://ssl.gstatic.com/accounts/ui/avatar_2x.png">
                            </div>
                            <!-- /thumbnail -->
                        </div>
                        <!-- /col-sm-1 -->
                        <div class="col-sm-11">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <strong>{{$cm->user->name}}</strong>
                                    <span class="text-muted">{{$cm->created_at}}</span>
                                </div>
                                <div class="panel-body">
                                    {{$cm->content}}
                                </div>
                                @if(Auth::check()) @if($cm->id_user == Auth::user()->id )
                                <a class="float-right" href="/deletecommentcustomer/{{$products[0]->productslug}}/{{$cm->id}}"><i class="fas fa-trash-alt"></i></a>                                @else @endif @endif
                                <!-- /panel-body -->
                            </div>
                            <!-- /panel panel-default -->
                        </div>
                        <!-- /col-sm-5 -->
                    </div>
                </div>
                
                @endforeach {{-- end comment --}}
                {{ $comments->links() }}
                {{-- <button name="loadmore" id="loadmore">Load more</button> --}}
                {{-- <button href="" id="btn-more">MORE</button> --}}
            </div>
        </div>
    </div>
</div>


@endsection