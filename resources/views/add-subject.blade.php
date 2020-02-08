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
              <li class="breadcrumb-item active"> {{$i=1}}Add Subject</li>
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
        <div class="card-body pt-5 mt-5 mr-4 ml-4">

            <table class="table">
                <thead class="bg-white">
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Subject name</th>
                    <th style="width: 40px">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($subjects as $subject)

                      <tr>
                        <td>{{$i++  }}</td>
                        <td><i class="fas fa-book"></i>&nbsp;{{$subject->name  }}</td>

                        <td>
                            <form action="/subject/{{$subject->id}}" method="POST">
                                @method('DELETE')
                                @csrf
                                    <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                      </tr>
                @endforeach
            </tbody>
        </table>
            </div>


                {{-- @foreach ($subjects as $subject)
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



                @endforeach --}}





    <!-- /.content -->

@endsection

