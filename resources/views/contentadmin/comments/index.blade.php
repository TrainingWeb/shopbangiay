@extends('layoutsadmin.master') 
@section('title', 'Comments Manage') 
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
            <li class="breadcrumb-item active">Comments Manager</li>
        </ol>
        <!-- Example DataTables Card-->
        
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Data table Comments</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Product</th>
                                <th>User</th>
                                <th>Content</th>
                                <th>DAY CREATED</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($comments as $c)
                            <tr>
                                <td>{{$c->id}}</td>
                                <td>{{$c->product->name}}</td>
                                <td>{{$c->user->name}}</td>
                                <td>{{$c->content}}</td>
                                <td>{{$c->created_at}}</td>
                                <td>
                                    <form action="/deleteComment/{{$c->id}}">
                                        <input class="btn btn-primary" type="submit" value="DELETE" name="DELETE">
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