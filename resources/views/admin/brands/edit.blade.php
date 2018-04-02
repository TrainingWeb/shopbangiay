{{--  @extends('layouts.app') 
@section('content')  --}}
<div class="container">
    <h1>Editing Brand</h1>
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
{{--  @endsection  --}}