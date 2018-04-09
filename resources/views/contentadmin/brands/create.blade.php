@extends('layoutsadmin.master') 
@section('title', 'Creating Brand') 
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
            <li class="breadcrumb-item active"><a href="/listbrandspp">Brand Manager</a></li>
            <li class="breadcrumb-item active">Creating Brand</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Creating Brand</div>
            <div class="card-body">
                <form class="form" action="/listbrands" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="col-md-6 form-group">
                        <label for="">Name</label>
                        <input class="form-control" autofocus="" type="text" name="name">
                    </div>
                    <div class="col-md-6 form-group">
                        <label for="">Slug</label>
                        <input class="form-control" autofocus="" type="text" name="brandslug">
                    </div>
                    <br>
                    <input class="btn btn-primary" type="submit" name="create" value="CREATE">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection