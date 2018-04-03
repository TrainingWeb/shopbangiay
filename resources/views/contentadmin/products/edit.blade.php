@extends('layoutsadmin.master') 
@section('title', 'Editing Product') 
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->         
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="#">Product Manager</a></li>
            <li class="breadcrumb-item active">Editing Product</li>
            
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Editing Product</div>
            <div class="card-body">
                <form action="/listproducts/{{$products->id}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" name="_method" value="PUT">
                    <div class="col-md-6 form-group">
                        <label for="">Name</label>
                        <input class="form-control" autofocus="" type="text" name="name" value="{{$products->name}}">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="">Price</label>
                        <input class="form-control" autofocus="" type="text" name="price" value="{{$products->price}}">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="">Slug</label>
                        <input class="form-control" autofocus="" type="text" name="productslug" value="{{$products->productslug}}">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="">Gender</label>
                        <select class="form-control" name="gender">
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="">Description</label>
                        <input class="form-control" autofocus="" type="text" name="description" value="{{$products->description}}">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="">Image</label>
                        <input class="form-control" autofocus="" type="file" name="image">
                    </div>
                    <div class="col-md-6 form-group">
                        <select class="col-md-6 form-control" name="group" value="">
                                        @foreach($brands as $brand)
                                    <option value="{{$brand->id}}">{{$brand->name}}</option>
                                        @endforeach
                                    </select>
                    </div>
                    <div class="col-md-6 form-group">
                        <input class="btn btn-primary" type="submit" name="edit" value="EDIT">
                    </div>
                </form>
            </div>
        </div>
</div>
@endsection