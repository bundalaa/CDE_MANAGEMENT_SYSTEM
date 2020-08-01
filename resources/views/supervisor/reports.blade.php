@extends('layouts.supervisorMenu')
@push('script')
<script src="{{ asset('/js/custom/comment.js') }}"></script>
@endpush
@section('content')
<header id="dashboard" class="pt-4 pb-3">
        <div class="container pt-5 pb-0">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="text-info">
                        <i class="fas fa-book-open text-dark"></i> Reports
                    </h1>
                </div>
            </div>
        </div>
    </header>
    @if ($message = Session::get('success'))

    <div class="alert alert-success alert-block">

        <button type="button" class="close" data-dismiss="alert">×</button>

        <strong>{{ $message }}</strong>

    </div>
    @endif

    <div id="page-container">
        <div id="content-wrap">
            <section id="add" class="py-4 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                        <a href="{{route('supervisorHome')}}" class="btn btn-muted btn-block">
                                <i class="fas fa-arrow-circle-left text-dark"></i> Back To Home
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="admin-panel">
                <div class="container">
                    <div class="row py-4">
                        <div class="col-sm-6 col-lg-3">
                             <p>
            <iframe src="{{url('public/storage/reports/'.$report->file)}}" style="width: 1100px;height: 500px;"></iframe>
            </p>
           <div class="card" style="width: 1100px">
            <div class="card-header">
            <h6 style="font-weight:bold" class="card-title">Team Name: <span class="text-info">{{$report->title}}</span></h6>
            <h6 style="font-weight:bold" class="card-subtitle">Report Category: <span class="text-info">{{$report->subtitle}}</span></h6>
            <h6 style="font-weight:bold" class="card-text">Report level: <span class="text-info">{{$report->description}}</span></h6>
            {{-- <div><button type="submit" class="btn btn-info mb-2">Add Comment</button></div> --}}
        </div>
       <form action="{{route('postCommentReport',$report->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
       <input type="text" name="user_id" value="{{auth()->user()->id}}" hidden>
                            <div id="show">
                                <div class="card card-primary card-outline" >
                                    <div class="card-body">
                                      <div class="form-group">
                                          <textarea id="compose-textarea" class="form-control" style="height: 100px" name="body">

                                          </textarea>
                                      </div>
                                    </div>
                                    <div class="card-footer">
                                      <div class="float-right">
                                        <button type="submit" class="btn btn-info"><i class="far fa-envelope"></i> Send</button>
                                      </div>
                                    </div>
                                  </div>
                            </div>
                        </form>
           </div>
                        </div>
                </div>
            </section>
            @endsection
            {{-- @section('scripts')
            <script type="text/javascript">
                document.getElementById("show").onclick = function() {
                    document.getElementById("show").style.display = "none";
                }
            </script>
            @endsection --}}
