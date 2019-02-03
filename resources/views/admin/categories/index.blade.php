@extends('layouts.admin.index')
@section('content')    
<section class="content-header">
  <h1>
    Category Page
    <small>Details about the Categories of room</small>
  </h1>
</section>

<section class="content container-fluid">

  <div>
    <div class="pull-right" style="margin-bottom: 20px">
      <a href="{{route('admin.get_create_category')}}" class="btn btn-primary">Create New Category</a>
    </div>
  </div>
  <div style="clear:both"></div>

  @include('layouts.admin.snippets.flash-message')
    
  <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Hover Data Table</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div id="example2_wrapper" class="">
            <div class="row">
            <table class="table table-bordered table-hover" role="grid">
              <thead>
                <tr role="row">
                  <th>S.N.</th>
                  <th>Name</th>
                  <th>Status</th>
                  <th>Action</th>
                </tr>
              </thead>

              <tbody>

                @if($categories->count())
                  @foreach($categories as $key=>$category)
                    <tr>
                      <td>{{$key+1}}</td>
                      <td>{{$category->name}}</td>
                      <td>{{$category->status==1 ? 'Active' : 'Inactive'}}</td>
                      <td>
                        <a href="" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                      </td>
                    </tr>
                  @endforeach
                @else
                  <tr>
                    <td colspan="4">No Categories Available</td>
                  </tr> 
                @endif               
              </tbody>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
  </section>
@endsection