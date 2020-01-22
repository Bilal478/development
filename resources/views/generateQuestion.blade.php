

@extends('layout')


<!-- Main Sidebar Container -->


@section('content')

  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Generate Question</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Generate Question</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6 col-md-12 ">
          <!-- general form elements -->
          <div class="card card-primary ">
            <div class="card-header">
              <h3 class="card-title">Fill detail</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form role="form" action = "generatequestion" methos="post">
              <div class="card-body">
                    <div class="form-group">
                        <label>Enter Question</label>
                        <textarea class="form-control" rows="3" placeholder="Enter Question ...."></textarea>
                    </div>

                     <div class="form-group">
                        <label>Option (a)</label>
                        <input type="text" class="form-control" placeholder="Enter Option ...">
                      </div>

                      <div class="form-group">
                        <label>Option (b)</label>
                        <input type="text" class="form-control" placeholder="Enter Option ...">
                      </div>

                      <div class="form-group">
                        <label>Option (c)</label>
                        <input type="text" class="form-control" placeholder="Enter Option ...">
                      </div>

                      <div class="form-group">
                        <label>Option (d)</label>
                        <input type="text" class="form-control" placeholder="Enter Option ...">
                      </div>

                      <div class="form-group">
                        <label>Enter True Option (a,b,c or d)</label>
                        <input type="text" class="form-control" placeholder="Enter True Option ..." required>
                      </div>

              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary" id = "save">Save</button>
                <button type="submit" class="btn btn-primary" id = "next" disabled="enabled">Next</button>
              </div>
            </form>
          </div>
          <!-- /.card -->

          <!-- Form Element sizes -->

          <!-- /.card -->

        </div>

        <!-- right column -->


        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>


  @endsection


