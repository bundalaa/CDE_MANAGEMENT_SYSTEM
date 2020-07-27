@extends('layouts.supervisorMenu')
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
                        {{-- <a href="{{route('readReport')}}">
                            <div class="card" id="card-1">
                                <div class='embed-responsive embed-responsive-16by9'>
                                        <p>
                                            <iframe src="{{url('public/storage/files/'.$data->file)}}" style="width: 600px;height: 500px;"></iframe>
                                            </p>
                                </div>
                                <div class="card-footer bg-white pb-0">
                                    <h2>{{$data->title}}</h2>
                                    <h3>{{$data->subtitle}}</h3>
                                    <h3>{{$data->description}}</h3>
                                </div>
                            </div>
                          </a> --}}
                          @foreach ($reports as $data)
                          <h2>{{$data->title}}</h2>
                          <h3>{{$data->subtitle}}</h3>
                          <h3>{{$data->description}}</h3>

            <p>
            <iframe src="{{url('public/storage/reports/'.$data->file)}}" style="width: 600px;height: 500px;"></iframe>
            </p>
                          @endforeach

                        </div>
                </div>
            </section>
            @endsection
