{{--  @extends('layouts.app') 
@section('content')  --}}
<div class="container">
    <h1>Creating Product</h1>
    @if(count($errors) > 0)
    <div class="aler alert-danger">
        @foreach($errors->all() as $err)
            <li style="padding:20px">{{$err}}</li>
        @endforeach
    </div>
    @endif
    <form action="/listproducts" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="col-md-6 form-group">
            <label for="">Name</label>
            <input class="form-control" autofocus="" type="text" name="name">
        </div>
        <div class="col-md-6 form-group">
            <label for="">Price</label>
            <input class="form-control" autofocus="" type="text" name="price">
        </div>
        <div class="col-md-6 form-group">
            <label for="">Slug</label>
            <input class="form-control" autofocus="" type="text" name="productslug">
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
            <input class="form-control" autofocus="" type="text" name="description">
        </div>
        <div class="col-md-6 form-group">
            <label for="">Image</label>
            <input class="form-control" autofocus="" type="file" name="image">
        </div>
        <div class="col-md-6 form-group">
            <select class="col-md-6 form-control" name="brand">
            @foreach($brands as $brand)
        <option value="{{$brand->id}}">{{$brand->name}}</option>
            @endforeach
        </select>
        </div>
        <div class="col-md-6 form-group">
            <input class="btn btn-primary" type="submit" name="create" value="CREATE">
        </div>
    </form>
</div>
{{--  @endsection  --}}