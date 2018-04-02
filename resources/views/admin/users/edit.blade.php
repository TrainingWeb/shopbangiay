{{--  @extends('layouts.app') 
@section('content')  --}}
<div class="container">
    <h1>Editing User</h1>
    @if(count($errors) > 0)
    <div class="aler alert-danger">
        @foreach($errors->all() as $err)
            <li style="padding:20px">{{$err}}</li>
        @endforeach
    </div>
    @endif
    @if(session('thongbao'))
        <div class="alert alert-success">
            {{session('thongbao')}}
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
{{--  @endsection  --}}