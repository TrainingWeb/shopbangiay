@extends('layoutsadmin.master') 
@section('title', 'Brand Manage') 
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        @if(session('thongbao'))
        <div class="alert alert-success">
            {{session('thongbao')}}
        </div>
        @endif
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Brand Manager</li>
        </ol>
        <!-- Example DataTables Card-->

        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Data table Brand</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Slug</th>
                                <th>Qty Products</th>
                                <th>DAY CREATED</th>
                                <th>Manage</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($brands as $brand)
                            <tr>
                                <td>{{$brand->id}}</td>
                                <td>{{$brand->name}}</td>
                                <td>{{$brand->brandslug}}</td>
                                <td>{{count($brand->products)}}</td>
                                <td>{{$brand->created_at}}</td>
                                <td>
                                    <form style="float:left" action="listbrands/{{$brand->id}}/edit">
                                        <input class="btn btn-primary" type="submit" value="Manage">
                                    </form>
                                </td>
                                <td>
                                    <form style="float:left" class="form" action="listbrands/{{$brand->id}}" method="POST">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input class="" type="hidden" name="_method" value="DELETE">
                                        <input class="btn btn-primary" type="submit" name="delete" value="DELETE">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
@endsection