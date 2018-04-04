@extends('layoutsadmin.master') 
@section('title', 'Creating User') 
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        {{-- bắt lỗi --}} @if($errors->any())
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <li style="list-style:none">{{$error}}</li>
            @endforeach
        </div>
        @endif {{-- bắt lỗi --}}
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="/listusers">User Manager</a></li>
            <li class="breadcrumb-item active">Creating User</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Creating User</div>
            <div class="card-body">
                <form action="/listusers" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="col-md-6 form-group">
                        <label for="">Name</label>
                        <input class="form-control" autofocus="" type="text" name="name">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="">Password</label>
                        <input class="form-control" autofocus="" type="password" name="password">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="">Address</label>
                        <input class="form-control" autofocus="" type="text" name="address">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="">Phone</label>
                        <input class="form-control" autofocus="" type="text" name="phone">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="">Role</label>
                        <select class="form-control" name="role">
                        <option value="admin">Admin</option>
                        <option value="customer">Customer</option>
                                </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="">Email</label>
                        <input class="form-control" autofocus="" type="text" name="email">
                    </div>
                    <div class="col-md-6 form-group">
                        <input class="btn btn-primary" type="submit" name="create" value="CREATE">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection