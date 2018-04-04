@extends('layoutsadmin.master') 
@section('title', 'Order Manage') 
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
            <li class="breadcrumb-item active">Order Manager</li>
        </ol>
        <!-- Example DataTables Card-->
        
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Data table Order</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Total</th>
                                <th>User</th>
                                <th>DAY CREATED</th>
                                <th>DAY UPDATED</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($orders as $order)
                            <tr>
                                <td>{{$order->id}}</td>
                                <td>{{$order->total}}</td>
                                <td>{{$order->user->name}}</td>
                                <td>{{$order->created_at}}</td>
                                <td>{{$order->updated_at}}</td>
                                <td>
                                    <form action="listorders/{{$order->id}}/delete" method="DELETE">
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