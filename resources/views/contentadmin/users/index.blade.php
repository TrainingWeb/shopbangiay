@extends('layoutsadmin.master') 
@section('title', 'User Manage') 
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
            <li class="breadcrumb-item active">User Manager</li>
        </ol>
        <!-- Example DataTables Card-->

        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Data table User</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Day Created</th>
                                <th>Manage</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->address}}</td>
                                <td>{{$user->phone}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->role}}</td>
                                <td>{{$user->created_at}}</td>
                                <td>
                                    <form action="listusers/{{$user->id}}/edit">
                                        <input class="btn btn-primary" type="submit" value="Manage">
                                    </form>
                                </td>
                                <td>
                                    <form class="form" action="listusers/{{$user->id}}" method="POST">
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