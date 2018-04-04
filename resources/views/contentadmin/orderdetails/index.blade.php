@extends('layoutsadmin.master') 
@section('title', 'OrderDetail Manage') 
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="/admin">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">OrderDetail Manager</li>
        </ol>
        <!-- Example DataTables Card-->
        
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Data table OrderDetail</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Quantity</th>
                                <th>Unit Price</th>
                                <th>ID Order</th>
                                <th>ID Product/Name Product</th>
                                <th>DAY CREATED</th>
                                <th>DAY UPDATED</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orderdetails as $od)
                            <tr>
                                <td>{{$od->id}}</td>
                                <td>{{$od->quantity}}</td>
                                <td>{{$od->unit_price}}</td>
                                <td>{{$od->id_order}}</td>
                                <td>{{$od->id_product}} - {{$od->product->name}}</td>
                                <td>{{$od->created_at}}</td>
                                <td>{{$od->updated_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            
</div>
</div>
@endsection