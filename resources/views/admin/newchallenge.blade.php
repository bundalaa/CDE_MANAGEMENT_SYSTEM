@extends('layouts.adminmenu')
@section('content')
<header id="dashboard" class="pt-5 pb-1">
    <div class="container pt-2 pb-0">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-info">
                    <i class="display-4 text-dark"></i>New Challenges
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
                    <a href="{{route('adminIndex')}}" class="btn btn-muted btn-block">
                            <i class="fas fa-arrow-circle-left text-dark"></i> Back To Home
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="admin-panel">
                <div class="row m-4">
                    <h2 >Lists of New Challenges</h2>
                                {{-- <div class="table-responsive mailbox-messages">
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
                            <td class="mailbox-subject"><b>{{$report->description}}</b> -Trying to click to open new Challenge...
                                </td>
                              </tr>
                              @endforeach
                              </tbody>
                            </table>
               </div> --}}
            </div>
        </section>
    </div>
            @endsection


