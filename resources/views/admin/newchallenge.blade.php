@php
    use App\ChallengeOwner;
@endphp
@extends('layouts.adminmenu')
@section('content')
<header id="dashboard" class="pt-4 pb-3">
        <div class="container pt-5 pb-0">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="text-info">
                        <i class="fas fa-book-open text-dark"></i> New Challenges
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
                        <a href="{{route('adminIndex')}}" class="btn btn-muted btn-block">
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
                                <h4>List of New Challenges</h1>
                            </div>
                                <div class="table-responsive mailbox-messages">
                                    <table class="table table-striped">
                                <tbody>
                                @foreach($newchallenges as $index=>$newchallenge)
                              <tr>
                                <td>
                                  {{$index+1}}
                                </td>
                                <td>
                                </td>
                            <td class="mailbox-name"><i class="fas fa-file mr-2"></i><a href="{{route('get1newchallenge',[$newchallenge->id])}}">{{$newchallenge->name}}</a> -Trying to click to open new Challenge...</td>
                            <td class="mailbox-subject">
                                <b>

                                 </b>
                                </td>
                              </tr>
                              @endforeach
                            </tbody>
                        </table>
                         <nav class="ml-4">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        {{$newchallenges->links()}}
                                    </div>
                                </div>
                               </nav>
                   </div>
                        </div>
                </div>
            </section>
        </div>
            @endsection
