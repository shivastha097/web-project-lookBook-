@extends('layouts.admin.index')
@section('content')    
<section class="content-header">
    <h1>
        Edit Category
        <small>Details about the Categories of room</small>
    </h1>
    </section>

    <section class="content container-fluid">

    <form action="{{route('admin.post_edit_category', ['category'=>$category->id])}}" method="POST">
        @csrf
        <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" class="form-control" value="{{$category->name}}">
        </div>
        <div class="form-group">
            <label for="">Status</label>
            <select name="status" class="form-control" id="">
                <option value="">---Select the status---</option>
                <option value="1" {{$category->status==1 ? 'selected' : ''}}>Active</option>
                <option value="0" {{$category->status==0 ? 'selected' : ''}}>Inactive</option>
            </select>
        </div>
        <input type="submit" value="Submit" class="btn btn-primary">
    </form>
    
    </section>
@endsection