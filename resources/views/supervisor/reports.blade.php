@extends('layouts.supervisorMenu')
@section('content')
<header id="dashboard" class="pt-4 pb-3">
        <div class="container pt-5 pb-0">
            <div class="row">
                <div class="col-lg-6">
                    <h1 style="color: #2874A6">
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
            <iframe src="{{url('files/uploadedReports/'.$report->file)}}" style="width: 1100px;height: 300px;"></iframe>
            </p>
           <div class="card" style="width: 1100px;border: 0px solid rgb(0 0 0 / 2%);
           ">
            <div class="card-header">
            <h6 style="font-weight:bold" class="card-title">Team Name: <span style="color: #2874A6">{{$report->title}}</span></h6>
            <h6 style="font-weight:bold" class="card-subtitle">Report Category: <span style="color: #2874A6">{{$report->subtitle}}</span></h6>
            <h6 style="font-weight:bold" class="card-text">Report level: <span style="color: #2874A6">{{$report->description}}</span></h6>
            {{-- <div><button type="submit" class="btn btn-info mb-2">Add Comment</button></div> --}}
        </div>

        <div class="well" style="padding: 18px">
        <button class="btn btn btn-open" onclick="commentOpen()" style="background-color: #2874A6">Leave a comment</button>
        <button class="btn btn-danger btn-close" style="display:none;" onclick="commentClose()">Cancel</button>
        </div>
       <form id="comment" action="{{route('postCommentReport',$report->id)}}" style="display: none;" method="POST" enctype="multipart/form-data">
        @csrf
       <input type="text" name="user_id" value="{{auth()->user()->id}}" hidden>
                            <div id="show">
                                <div class="card card-primary card-outline" style="border: 0px solid rgb(0 0 0 / 2%);">
                                    <div class="card-body" style="display: contents;">
                                      <div class="form-group">
                                          <textarea id="compose-textarea" class="form-control" style="height: 100px" name="body">

                                          </textarea>
                                      </div>
                                    </div>
                                    <div class="card-footer">
                                      <div class="float-right">
                                        <button type="submit" class="btn btn" style="background-color: #2874A6"><i class="far fa-envelope text-light"></i> Send</button>
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

