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
                    <div class="row m-4">
                        <h2 >Lists of Reports</h2>
                                    <div class="table-responsive mailbox-messages">
                                        <table class="table table-hover ">
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
            </section>
        </div>
            @endsection
