@extends('layoutsadmin.master') 
@section('title', 'Editing Product') 
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
            <li class="breadcrumb-item active"><a href="/listproducts">Product Manager</a></li>
            <li class="breadcrumb-item active">Editing Product</li>

        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Editing Product</div>
            <div class="card-body">
                <div class="col-md-6">
                    <form action="/listproducts/{{$products->id}}" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" name="_method" value="PUT">
                        <div class="form-group">
                            <label for="">Name</label>
                            <input class="form-control" autofocus="" type="text" name="name" value="{{$products->name}}">
                        </div>
                        <div class="form-group">
                            <label for="">Price</label>
                            <input class="form-control" autofocus="" type="text" name="price" value="{{$products->price}}">
                        </div>
                        <div class="form-group">
                            <label for="">Slug</label>
                            <input class="form-control" autofocus="" type="text" name="productslug" value="{{$products->productslug}}">
                        </div>
                        <div class="form-group">
                            <label for="">Gender</label>
                            <select class="form-control" name="gender">
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                        </select>
                        </div>
                        <div class="form-group">
                            <label for="">Description</label>
                            <textarea class="form-control" rows="10" value="" name="description">{{$products->description}}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="">Old image</label>
                            <img src="/images/{{$products->image}}" width="100" title="Old image" alt="">
                        </div>
                        <div class="form-group">
                                <label for="">Choose new image</label>
                            <input class="form-control right" value="{{$products->image}}" type="file" name="image">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="brand" value="">
                                        @foreach($brands as $brand)
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                        @endforeach
                                    </select>
                        </div>
                        <div class="form-group">
                            <input class="btn btn-primary" type="submit" name="edit" value="EDIT">
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection