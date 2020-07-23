@extends('layouts.adminmenu')
@section('content')
<header id="dashboard" class="pt-5 pb-3">
    <div class="container pt-3 pb-0">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-info">
                    <i class="fa fa-newspaper-o text-dark"></i> Publications
                </h1>
            </div>
        </div>
    </div>
</header>
<div id="page-container">
    <div id="content-wrap">
            <div class="row">
                <div class="col-4">
                    <div class="card" style="width: 18rem;margin:10px">
                        <div class="card-body">
                          <h5 class="card-title" style="padding-left:50px">Upload news</h5>
                          <hr color="solid">
                          <h6 class="card-subtitle mb-2 text-muted">Upload the news here...</h6>
                          <p class="card-text"><div class="form-group">
                              <textarea class="form-control" id="text" rows="10"></textarea>
                          </div></p>
                          <button type="submit" class="btn btn-info mb-2">Send</button>
                        </div>
                </div>
              </div>
              <div class="col-4" style="margin: 10px">
                <div class="card" style="width: 18rem;margin:10px">
                    <div class="card-body">
                      <h5 class="card-title" style="padding-left:50px">Upload events</h5>
                      <hr color="solid">
                      <h6 class="card-subtitle mb-2 text-muted">Upload the events here...</h6>
                      <p class="card-text"><div class="form-group">
                          <textarea class="form-control" id="text" rows="10"></textarea>
                      </div></p>
                      <button type="submit" class="btn btn-info mb-2">Send</button>
                    </div>
            </div>
              </div>
            </div>
        </div>
    @endsection
