  @extends('layout')

  @section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header pb-1">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4 class="m-0 text-dark ">Add New Subject</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Subject</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <form method="POST" action="{{ route('subject.store') }}">
            @csrf
            <div class="ml-4 mr-4">
              <div class="form-group">
                <div class="custom-file">
                <label for="exampleInputEmail1">Enter Subject Name</label>
                <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Subject" required>
                <button type="submit" class="btn btn-primary float-right mt-2">Submit</button>
                </div>
            </div>
            </div>
        </form>


                @foreach ($subjects as $subject)
                <div class="col-md-3 col-sm-6 col-12 float-left mt-5">
                    <a class="pb-8" href="#">
                    <div class="info-box">
                      <span  class="info-box-icon bg-info"><i class="fas fa-book"></i></span>

                      <div class="info-box-content">
                        <span class="info-box-text mt-2">{{$subject->name  }}</span>
                      </div>
                    </div>
                     </a>
                </div>



                @endforeach





    <!-- /.content -->

@endsection

