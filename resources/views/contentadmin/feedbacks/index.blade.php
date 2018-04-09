@extends('layoutsadmin.master') 
@section('title', 'Feedback Manage') 
@section('content')
<div class="content-wrapper">
    <div class="container-fluid">
        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Feedback Manager</li>
        </ol>
        <!-- Example DataTables Card-->
        
        <div class="card mb-3">
            <div class="card-header">
                <i class="fa fa-table"></i> Data table Feedback</div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Company</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Option</th>
                                <th>Content</th>
                                <th>DAY CREATED</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($feedbacks as $f)
                            <tr>
                                <td>{{$f->id}}</td>
                                <td>{{$f->name}}</td>
                                <td>{{$f->company}}</td>
                                <td>{{$f->phone}}</td>
                                <td>{{$f->email}}</td>
                                <td>{{$f->option}}</td>
                                <td>{{$f->content}}</td>
                                <td>{{$f->created_at}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>  
</div>
</div>
@endsection