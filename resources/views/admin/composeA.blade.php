@extends('layouts.adminMenu')
@section('content')
@php
    use App\ContactUs;
@endphp





<header id="dashboard" class="pt-4 pb-3">
    <div class="container pt-5 pb-0">
        <div class="row">
            <div class="col-md-6">
                <h1 style="color: #2874A6">
                    <i class="fas fa-folder-open text-dark"></i> Messages
                </h1>
            </div>
        </div>
    </div>
</header>

<div class="container">
@if(Session::has('message'))
        <div class="alert alert-success">
            <ul>
                <li>{{ Session::get('message') }}</li>
            </ul>
        </div>
    @endif
    @if ($errors->any())
        <div class="alert alert-danger">
             <ul class="alert alert-danger" style="list-style: none;">
                @foreach ($errors->all() as $error)
                    <li><?php echo $error; ?></li>
                @endforeach
            </ul>
        </div>
    @endif

</div>


{{-- <div class="content-wrapper"> --}}
    <div id="page-container">
        <div id="content-wrap">
    <!-- Main content -->
    <section class="content">
      <div class="row">
          <div class="container">
            <div class="col-md-12">
                <form action="{{route('postCommentMessage',$contact['id'])}}" method="POST">
                    {{-- ,$contact->id) --}}
                    @csrf
                    {{-- <input type="text" name="coordinator_id" value="{{$user->id}}" hidden> --}}
                    <div class="card card-primary card-outline mt-4">

                        <!-- /.card-header -->
                        <div class="card-body">
                            <div class="form-group">
                                To: {{$contact['email']}}

                              </div>
                              <div class="form-group">
                                <input name="subject" class="form-control" placeholder="Subject:">
                              </div>
                          <div class="form-group">
                              <textarea  placeholder="Enter message..." id="compose-textarea" name="body" class="form-control" style="height: 300px" ></textarea>
                          </div>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                          <div class="float-right">
                            <button type="submit" class="btn btn" style="background-color: #2874A6"><i class="far fa-envelope"></i> Send</button>
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
