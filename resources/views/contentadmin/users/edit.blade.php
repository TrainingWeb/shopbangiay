
@extends('layoutsadmin.master') 
@section('title', 'Editing User') 
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="#">User Manager</a></li>
            <li class="breadcrumb-item active">Editing User</li>

        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Editing User</div>
            <div class="card-body">
                @if(count($errors) > 0)
                <div class="aler alert-danger">
                    @foreach($errors->all() as $err)
                    <li style="padding:20px">{{$err}}</li>
                    @endforeach
                </div>
                @endif
                <form action="/listusers/{{$users->id}}" method="POST">
                    <input type="hidden" name="_method" value="PUT">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="col-md-6 form-group">
                        <label for="">Name</label>
                        <input class="form-control" autofocus="" type="text" name="name" value="{{$users->name}}">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="">Address</label>
                        <input class="form-control" autofocus="" type="text" name="address" value="{{$users->address}}">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="">Email</label>
                        <input class="form-control" autofocus="" type="text" name="email" value="{{$users->email}}">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="">Password</label>
                        <input class="form-control" autofocus="" type="password" name="password" value="{{$users->password}}">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="">Phone</label>
                        <input class="form-control" autofocus="" type="number" name="phone" value="{{$users->phone}}">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="">Role</label>
                        <select class="form-control" name="role">
                                <option value="admin">Admin</option>
                                <option value="customer">Customer</option>
                            </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <input class="btn btn-primary" type="submit" name="update" value="EDIT">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection