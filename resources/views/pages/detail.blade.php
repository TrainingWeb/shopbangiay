{{-- thừa kế từ trang page.blade.php --}} 
@extends('layouts.page') {{-- Tên trang --}} 
@section('title') {{$title}}
@endsection
{{-- phần thân login --}} 
@section('content')
<div class="contain">
    <div class="container">
        <div class="row py-3">
            <div class="col-lg-4">
                <img class="w-100 pb-3" style="object-fit:cover; height:300px" src="/images/{{$products->image}}" alt="">
            </div>
            <div class="col-lg-8">
                <h4 class="title-detail">{{$products->name}}</h4>
                <h4 class=" color title-detail ">${{$products->price}}</h4>
                <p>{{$products->description}}</p>
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
                        <button type="button" class="btn btn-warning bg-btn text-white rounded-0 py-2"> <i class="fas fa-gift text-white"></i></button>
                        <button type="button" class="btn py-2 btn-warning bg-btn text-white rounded-0"> ADD TO CARD </button>
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
                    aria-selected="true">LIST PRODUCT</a>
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
                <p>
                    Caelumque opifex pluviaque vultus videre. Indigestaque inminet montes nabataeaque circumdare iners. Campos unus habitabilis
                    nondum cornua pluviaque. Forma pulsant sectamque supplex aberant! Crescendo lapidosos litem occiduo triones
                    caelo locavit retinebat aethere. Caelumque opifex pluviaque vultus videre. Indigestaque inminet montes
                    nabataeaque circumdare iners. Campos unus habitabilis nondum cornua pluviaque. Forma pulsant sectamque
                    supplex aberant! Crescendo lapidosos litem occiduo triones caelo locavit retinebat aethere. Caelumque
                    opifex pluviaque vultus videre. Indigestaque inminet montes nabataeaque circumdare iners. Campos unus
                    habitabilis nondum cornua pluviaque. Forma pulsant sectamque supplex aberant! Crescendo lapidosos litem
                    occiduo triones caelo locavit retinebat aethere. Caelumque opifex pluviaque vultus videre. Indigestaque
                    inminet montes nabataeaque circumdare iners. Campos unus habitabilis nondum cornua pluviaque. Forma pulsant
                    sectamque supplex aberant! Crescendo lapidosos litem occiduo triones caelo locavit retinebat aethere.
                    Caelumque opifex pluviaque vultus videre. Indigestaque inminet montes nabataeaque circumdare iners. Campos
                    unus habitabilis nondum cornua pluviaque. Forma pulsant sectamque supplex aberant! Crescendo lapidosos
                    litem occiduo triones caelo locavit retinebat aethere. Caelumque opifex pluviaque vultus videre. Indigestaque
                    inminet montes nabataeaque circumdare iners. Campos unus habitabilis nondum cornua pluviaque. Forma pulsant
                    sectamque supplex aberant! Crescendo lapidosos litem occiduo triones caelo locavit retinebat aethere.
                </p>
            </div>
            <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                <p>
                    Caelumque opifex pluviaque vultus videre. Indigestaque inminet montes nabataeaque circumdare iners. Campos unus habitabilis
                    nondum cornua pluviaque. Forma pulsant sectamque supplex aberant! Crescendo lapidosos litem occiduo triones
                    caelo locavit retinebat aethere. Caelumque opifex pluviaque vultus videre. Indigestaque inminet montes
                    nabataeaque circumdare iners. Campos unus habitabilis nondum cornua pluviaque. Forma pulsant sectamque
                    supplex aberant! Crescendo lapidosos litem occiduo triones caelo locavit retinebat aethere. Caelumque
                    opifex pluviaque vultus videre. Indigestaque inminet montes nabataeaque circumdare iners. Campos unus
                    habitabilis nondum cornua pluviaque. Forma pulsant sectamque supplex aberant! Crescendo lapidosos litem
                    occiduo triones caelo locavit retinebat aethere. Caelumque opifex pluviaque vultus videre. Indigestaque
                    inminet montes nabataeaque circumdare iners. Campos unus habitabilis nondum cornua pluviaque. Forma pulsant
                    sectamque supplex aberant! Crescendo lapidosos litem occiduo triones caelo locavit retinebat aethere.
                    Caelumque opifex pluviaque vultus videre. Indigestaque inminet montes nabataeaque circumdare iners. Campos
                    unus habitabilis nondum cornua pluviaque. Forma pulsant sectamque supplex aberant! Crescendo lapidosos
                    litem occiduo triones caelo locavit retinebat aethere. Caelumque opifex pluviaque vultus videre. Indigestaque
                    inminet montes nabataeaque circumdare iners. Campos unus habitabilis nondum cornua pluviaque. Forma pulsant
                    sectamque supplex aberant! Crescendo lapidosos litem occiduo triones caelo locavit retinebat aethere.
                </p>
            </div>
            <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                <p>
                    Caelumque opifex pluviaque vultus videre. Indigestaque inminet montes nabataeaque circumdare iners. Campos unus habitabilis
                    nondum cornua pluviaque. Forma pulsant sectamque supplex aberant! Crescendo lapidosos litem occiduo triones
                    caelo locavit retinebat aethere. Caelumque opifex pluviaque vultus videre. Indigestaque inminet montes
                    nabataeaque circumdare iners. Campos unus habitabilis nondum cornua pluviaque. Forma pulsant sectamque
                    supplex aberant! Crescendo lapidosos litem occiduo triones caelo locavit retinebat aethere. Caelumque
                    opifex pluviaque vultus videre. Indigestaque inminet montes nabataeaque circumdare iners. Campos unus
                    habitabilis nondum cornua pluviaque. Forma pulsant sectamque supplex aberant! Crescendo lapidosos litem
                    occiduo triones caelo locavit retinebat aethere. Caelumque opifex pluviaque vultus videre. Indigestaque
                    inminet montes nabataeaque circumdare iners. Campos unus habitabilis nondum cornua pluviaque. Forma pulsant
                    sectamque supplex aberant! Crescendo lapidosos litem occiduo triones caelo locavit retinebat aethere.
                    Caelumque opifex pluviaque vultus videre. Indigestaque inminet montes nabataeaque circumdare iners. Campos
                    unus habitabilis nondum cornua pluviaque. Forma pulsant sectamque supplex aberant! Crescendo lapidosos
                    litem occiduo triones caelo locavit retinebat aethere. Caelumque opifex pluviaque vultus videre. Indigestaque
                    inminet montes nabataeaque circumdare iners. Campos unus habitabilis nondum cornua pluviaque. Forma pulsant
                    sectamque supplex aberant! Crescendo lapidosos litem occiduo triones caelo locavit retinebat aethere.
                </p>
            </div>
        </div>
    </div>
</div>
@endsection