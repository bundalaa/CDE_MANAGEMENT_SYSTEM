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
                    <div class="row m-2">
                        <div class="card col-md-12 d-flex justify-content-center flex-wrap flex-column" id="card-table">
                            <div class="card-header">
                                <h4>List of Reports</h1>
                            </div>
                                <div class="table-responsive mailbox-messages">
                                    <table class="table table-striped">
                                <tbody>
                                @foreach($reports as $report)
                              <tr>
                                <td>
                                  {{$report->id}}
                                </td>
                                <td><i class="fas fa-file mr-2"></i>
                                </td>
                            <td class="mailbox-name"><a href="{{route('get1Report',[$report->id])}}">{{$report->title}}</a></td>
                            <td class="mailbox-subject"><b>{{$report->description}}</b> -Trying to click to open new Report...
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                        </table>
                   </div>
                        </div>
                </div>
            </section>
        </div>
            @endsection
