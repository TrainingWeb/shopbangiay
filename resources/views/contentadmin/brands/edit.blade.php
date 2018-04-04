@extends('layoutsadmin.master') 
@section('title', 'Editing Brand') 
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="#">Brand Manager</a></li>
            <li class="breadcrumb-item active">Editing Brand</li>
        </ol>
        <!-- Example DataTables Card-->
        <div class="card mb-3">
                <div class="card-header">
                        <i class="fa fa-table"></i> Editing Brand</div>
                        <div class="card-body">
            <form class="form" action="/listbrands/{{$brands->id}}" method="POST">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="_method" value="PUT">
                <div class="col-md-6 form-group">
                    <label for="">Name</label>
                    <input class="form-control" autofocus="" type="text" name="name" value="{{$brands->name}}">
                </div>
                <div class="col-md-6 form-group">
                    <label for="">Slug</label>
                    <input class="form-control" autofocus="" type="text" name="brandslug" value="{{$brands->brandslug}}">
                </div>
                <br>
                <input class="btn btn-primary" type="submit" name="edit" value="EDIT">
            </form>
        </div>
    </div>
</div>
</div>
@endsection