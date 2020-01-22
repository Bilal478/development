@extends('layout')

@section('content')

  <!-- Content Header (Page header) -->
  <div class="content-header pb-1">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h4 class="m-0 text-dark">Add Description File</h4>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">{{$i=1}}Description File</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">

        <form method="POST" action="{{ route('descriptionfile.store') }}" enctype="multipart/form-data">
          @csrf
            <div class="ml-4 mr-4 ">
                <label>Select Subject</label>
                <select class="form-control select2" style="width: 100%;" name="subject_id" required>
                <option value = "" selected="selected">-----Select Subject----</option>

                @foreach ($subjects as $subject)
                <option value="{{$subject->id}}">{{$subject->name}}</option>
                @endforeach
                </select>

                <div class="form-group mb-2">
                    <label class="mt-1">Select file</label>
                    <div class="custom-file">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                    <input type="file" name="name" class="custom-file-input" id="customFile" required>
                    <button type="submit" class="btn btn-primary float-right mt-2">Submit</button>
                    </div>
                </div>
            </div>

{{--
            @foreach ($descriptionfiles as $descriptionfile)
              <div class="col-md-3 col-sm-6 col-12 float-left mt-4">
                  <a class="pb-8" href="{{$descriptionfile->path  }} "><div class="info-box">
                    <span class="info-box-icon bg-info"><i class="fas fa-file-download"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text mt-2">{{$descriptionfile->name  }}</span>

                    </div>
                  </div>
                </a>
              </div>
            @endforeach --}}

        </form>

        <div class="card-body pt-5 mt-5 mr-4 ml-4">
            <table class="table">
                <thead class="bg-white">
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Description Files</th>
                    <th style="width: 40px">Action</th>
                  </tr>
                </thead>
                <tbody>
                @foreach ($descriptionfiles as $descriptionfile)

                      <tr>
                        <td>{{$i++  }}</td>
                        <td><a class="pb-8 text-dark" href="{{'/'.$descriptionfile->path  }} "><i class="far fa-file-word"></i>&nbsp;{{$descriptionfile->name  }}</a></td>

                        <td>
                            <form action="/descriptionfile/{{$descriptionfile->id}}" method="POST">
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

  </section>

@endsection

