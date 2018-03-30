@extends('layouts.app') 
@section('content')
<div class="container">
    <h1>Editing Product</h1>
    @if(count($errors) > 0)
    <div class="aler alert-danger">
        @foreach($errors->all() as $err)
            <li style="padding:20px">{{$err}}</li>
        @endforeach
    </div>
    @endif
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
            <label for="">Color</label>
            <input class="form-control" autofocus="" type="text" name="color" value="{{$products->color}}">
        </div>
        <div class="col-md-6 form-group">
            <label for="">Size</label>
            <input class="form-control" autofocus="" type="text" name="size" value="{{$products->size}}">
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
@endsection