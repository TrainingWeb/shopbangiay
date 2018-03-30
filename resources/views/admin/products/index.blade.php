@extends('layouts.app') 
@section('content')
<div class="container">
    <a href="/listproducts/create">Create new Products</a>
    @if(session('thongbao'))
        <div class="alert alert-success">
            {{session('thongbao')}}
        </div>
    @endif
    <table class="table table-responsive">
        <tr>
            <td>ID</td>
            <td>NAME</td>
            <td>IMAGE</td>
            <td>PRICE</td>
            <td>SLUG</td>
            <td>GENDER</td>
            <td>DESCRIPTION</td>
            <td>BRAND</td>
            <td>CREATED AT</td>
            <td>UPDATED AT</td>
            <td>EDIT/DELETE</td>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td><img src="../images/{{$product->image}}" width="200"></td>
            {{--  <td>{{$product->image}}</td>  --}}
            <td>{{$product->price}}</td>
            <td>{{$product->productslug}}</td>
            <td>{{$product->gender}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->brand->name}}</td>
            
            <td>{{$product->created_at}}</td>
            <td>{{$product->updated_at}}</td>
            <td>
                <form action="listproducts/{{$product->id}}/edit">
                    <input class="form-control" type="submit" value="EDIT">
                </form>
                <form class="form" action="listproducts/{{$product->id}}" method="POST">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input class="form-control" type="hidden" name="_method" value="DELETE">
                    <input class="form-control" type="submit" name="delete" value="DELETE">
                </form>
            </td>
        </tr>
        @endforeach
    </table>
</div>
@endsection