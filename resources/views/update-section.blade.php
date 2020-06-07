@extends('layout')

@section('content')

  <!-- Content Header (Page header) -->
  <div class="content-header pb-1">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4 class="m-0 text-dark ">Add New Section</h4>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Add Section</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
      <form method="POST" action="{{ route('section.update',$section->id) }}">
          @method('PATCH')
          @csrf
          <div class="ml-4 mr-4">
            <div class="form-group">
              <div class="custom-file">
              <label for="exampleInputEmail1">Enter Section Name</label>
              <input type="text" name="name" value="{{$section->name}}" class="form-control" id="exampleInputEmail1" placeholder="Enter Section Name" required>
              <button type="submit" class="btn btn-primary float-right mt-2">Submit</button>
              </div>
          </div>
          </div>
      </form>
      <div class="card-body pt-5 mt-5 mr-4 ml-4">

        </div>



@endsection

