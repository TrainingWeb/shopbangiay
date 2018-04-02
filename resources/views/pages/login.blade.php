{{--  thừa kế từ trang page.blade.php  --}}
@extends('layouts.page')

{{--  Tên trang  --}}
@section('title', 'Login ')

{{--  phần thân login  --}}
@section('content')
<div class="contain">
    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-lg-12">
                    <h4 class="title-detail mt-3 mb-5">CUSTOMER LOGIN</h4>
            </div>
            <div class="col-lg-6  col-md-6 mb-5 ">
                   
                <h6 class="border-bottom pb-2">REGISTERED CUSTOMERS </h6>
                <p class="text-muted pb-3">We'll never share your email with anyone else.</p>
                <form action="{{route('login')}}" method="POST">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email *</label>
                        <input type="email" class="form-control form-control-sm  col-8" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" placeholder="Enter email here...">

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
                <form>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email *</label>
                        <input type="email" class="form-control  form-control-sm col-8" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                    </div>
                    <div class="form-group">
                            <label for="exampleInputPassword1">Phone *</label>
                            <input type="text" class="form-control  form-control-sm col-8" id="exampleInputPassword1" placeholder="Phone">
                        </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password *</label>
                        <input type="password" class="form-control  form-control-sm col-8" id="exampleInputPassword1" placeholder="Password">
                    </div>
                   
                   
                    <button type="submit" class="btn btn-dark rounded-0 btn-sm px-4">CREATE AN ACCOUNT</button>
                </form>
            </div>

        </div>
    </div>
</div>

@endsection
