{{-- thừa kế từ trang page.blade.php --}} 
@extends('layouts.page') {{-- Tên trang --}} 
@section('title', 'Login ') {{-- phần
thân login --}} 
@section('content') 
@if(!Auth::check())
<div class="contain">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="title-detail mt-3 mb-5">CUSTOMER LOGIN</h4>
            </div>
            <div class="col-lg-6  col-md-6 mb-5 ">
                @if(session('thongbao'))
                <div class="alert alert-danger">
                    {{session('thongbao')}}
                </div>
                @endif
                @if(session('success'))
                <div class="alert alert-success">
                    {{session('success')}}
                </div>
                @endif
               
                <h6 class="border-bottom pb-2">REGISTERED CUSTOMERS </h6>
                <p class="text-muted pb-3">We'll never share your email with anyone else.</p>
                <form action="/postlogin" method="POST">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email *</label>
                        <input type="text" class="form-control form-control-sm  col-8" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"
                            placeholder="Enter email here...">

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>
                        <input type="password" class="form-control form-control-sm col-8" id="exampleInputPassword1" name="password" placeholder="Password">
                    </div>

                    <button type="submit" class="btn btn-dark rounded-0 btn-sm px-4">LOGIN</button>
                    <small class="pl-3 ">
                         <a href=""class="text-muted"> Forgot your password?</a>
                    </small>
                </form>
            </div>
            <div class="col-lg-6 col-md-6">
                <h6 class="border-bottom pb-2">NEW CUSTOMERS</h6>
                <small class="text-muted mb-5">We'll never share your email with anyone else. We'll never share your email with anyone else.</small>
                <form method="post" action="{{route('postUser')}}">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="exampleInputName1">Name *</label>
                        <input type="text" class="form-control  form-control-sm col-8" id="exampleInputName1" aria-describedby="emailHelp" name="name"
                            placeholder="Enter your name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password *</label>
                        <input type="password" class="form-control  form-control-sm col-8" id="exampleInputPassword1" name="password" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputAddress1">Address *</label>
                        <input type="text" class="form-control  form-control-sm col-8" id="exampleInputAddress1" name="address" placeholder="Address">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPhone1">Phone *</label>
                        <input type="text" class="form-control  form-control-sm col-8" id="exampleInputPhone1" name="phone" placeholder="Phone">
                    </div>
                    <input type="hidden" name="role" value="0">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email *</label>
                        <input type="email" class="form-control  form-control-sm col-8" id="exampleInputEmail1" aria-describedby="emailHelp" name="email"
                            placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-dark rounded-0 btn-sm px-4">CREATE AN ACCOUNT</button>
                </form>
            </div>

        </div>
    </div>
</div>
@else
<div class="contain">
    <div class="container pt-5 pb-5">
        <div class="row">
                @if(session('thongbao'))
                <div class="col-lg-12 alert alert-danger">
                    {{session('thongbao')}}
                </div>
                @endif
            <div class="col-lg-12 alert alert-success">
                You're has login
            </div>
            
                {{-- @endif --}}
        </div>
        <a href="/"><< Go back to Home Page</a>
    </div>
</div>

@endif
@endsection