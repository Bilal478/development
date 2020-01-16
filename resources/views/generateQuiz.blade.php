  @extends('sidebar')

  @extends('footer')

  @extends('layout')

  @extends('menubar')

  <body class="hold-transition sidebar-mini layout-fixed">

  <!-- Main Sidebar Container -->
  
  
  @section('body')
      <div class="wrapper">

      <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Generate Quiz</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Generate Quiz</li>
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
                  <label>Select Class</label>
                  <select class="form-control select2" style="width: 100%;" required>
                    <option ></option>
                    <option >CS</option>
                    <option>SE</option>
                    <option>IT</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Select Semester</label>
                  <select class="form-control select2" style="width: 100%;" required>
                    <option ></option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Select Section</label>
                  <select class="form-control select2" style="width: 100%;" required>
                    <option ></option>
                    <option>A</option>
                    <option>B</option>
                    <option>C</option>
                    <option>D</option>
                    <option>E</option>
                    <option>F</option>
                  </select>
                </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
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

      </div>   
    @endsection
         
</body>
            