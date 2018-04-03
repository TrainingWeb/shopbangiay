@extends('layoutsadmin.master') 
@section('title', 'Product Manage') 
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
                <a href="/admin">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Product Manager</li>
        </ol>
        <!-- Example DataTables Card-->

        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Data table Product</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Price</th>
                                <th>Slug</th>
                                <th>Gender</th>
                                <th>Description</th>
                                <th>Brand</th>
                                <th>Day Created</th>
                                <th>Day Updated</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td>{{$product->id}}</td>
                                <td>{{$product->name}}</td>
                                <td><img src="../images/{{$product->image}}" width="200"></td>
                                {{--
                                <td>{{$product->image}}</td> --}}
                                <td>{{$product->price}}</td>
                                <td>{{$product->productslug}}</td>
                                <td>{{$product->gender}}</td>
                                <td>{{$product->description}}</td>
                                <td>{{$product->brand->name}}</td>

                                <td>{{$product->created_at}}</td>
                                <td>{{$product->updated_at}}</td>
                                <td>
                                    <form action="listproducts/{{$product->id}}/edit">
                                        <input class="btn btn-primary" type="submit" value="EDIT">
                                    </form>
                                </td>
                                <td>
                                    <form class="form" action="listproducts/{{$product->id}}" method="POST">
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