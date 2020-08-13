@extends('layouts.adminMenu')
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
          <div class="container">
            <div class="col-md-12">
                <form action="{{route('postCommentMessage',$contact->id)}}" method="POST">
                    @csrf
                    <input type="text" name="coordinator_id" value="{{$user->id}}" hidden>
                    <div class="card card-primary card-outline mt-4">

                        <!-- /.card-header -->
                        <div class="card-body">

                          <div class="form-group">
                              <textarea id="compose-textarea" name="body" class="form-control" style="height: 300px">

                              </textarea>
                          </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                          <div class="float-right">
                            <button type="submit" class="btn btn-info"><i class="far fa-envelope"></i> Send</button>
                          </div>
                        </div>
                        <!-- /.card-footer -->
                      </div>
                </form>
                  <!-- /.card -->
            </div>
          </div>
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
