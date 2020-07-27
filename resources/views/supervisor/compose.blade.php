@extends('layouts.supervisorMenu')
@section('content')
<header id="dashboard" class="pt-4 pb-3">
    <div class="container pt-5 pb-0">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-info">
                    <i class="fas fa-folder-open text-dark"></i> Messages
                </h1>
            </div>
        </div>
    </div>
</header>
{{-- <div class="content-wrapper"> --}}
    <div id="page-container">
        <div id="content-wrap">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="{{route('composemessage')}}" class="btn btn-info btn-block mb-3">Compose</a>

          <div class="card">
            <div class="card-header">

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item active">
                <a href="{{route('inboxmessage')}}" class="nav-link">
                    <i class="fas fa-inbox text-info"></i> Inbox
                    <span class="badge bg-secondary float-right">12</span>
                  </a>
                </li>

              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="card card-primary card-outline">
                <div class="card-header">
                  <h3 class="card-title">Compose New Message</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <div class="form-group">
                    <input class="form-control" placeholder="To:">
                  </div>
                  <div class="form-group">
                    <input class="form-control" placeholder="Subject:">
                  </div>
                  <div class="form-group">
                      <textarea id="compose-textarea" class="form-control" style="height: 300px">

                      </textarea>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <div class="float-right">
                    <button type="submit" class="btn btn-primary"><i class="far fa-envelope"></i> Send</button>
                  </div>
                </div>
                <!-- /.card-footer -->
              </div>
              <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>


<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- Summernote -->
<script src="../../plugins/summernote/summernote-bs4.min.js"></script>
<!-- Page Script -->
<script>
  $(function () {
    //Add text editor
    $('#compose-textarea').summernote()
  })
</script>
@endsection
