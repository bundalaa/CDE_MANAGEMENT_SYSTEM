@extends('layouts.supervisorMenu')
@section('content')
@php
     use App\User;
     use App\IdentifiedChallenge;
     use App\Supervisor;
     use App\Team;
     use App\Student;
@endphp
    <header id="dashboard" class="pt-4 pb-3">
        <div class="container pt-5 pb-0">
            <div class="row">
                <div class="col-md-6">
                    <h1 style="color: #2874A6">
                        <i class="fas fa-users-cog text-dark"></i>Team Details
                    </h1>
                </div>
            </div>
        </div>
    </header>
    <div id="page-container">
        <div id="content-wrap">
            @if (session('message'))
            <div class="row">
                <div class="col-md-12">
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        {{ session('message') }}
                    </div>
                </div>
            </div>
        @endif
            <div class="row pb-3">
                <div class="col-md-3">
                    <a href="{{route('viewteam')}}" class="btn btn-muted btn-block">
                        <i class="fas fa-arrow-circle-left text-dark"></i> Back To Team
                    </a>
                </div>
                <div class="col-md-12 d-flex justify-content-center flex-wrap flex-column">
            <div class="card p-4" id="card-table">
                        <div class="card-header">
                       <div class="row">
                           <div class="col-6"> <h4>Team Name:
                            @php
                            $challenged = Team::where('id',$id)->first();
                            $challenges = IdentifiedChallenge::where('id',$challenged['identified_challenge_id'])->first();
                        @endphp
                           <b style="text-transform:uppercase;color: #2874A6">{{$challenges['name']}}</b>
                           </h4>
                            <h4>Supervisor Name:
                                @php
                                $supervisor = Supervisor::where('id',$id)->first();
                                $supervisor = User::where('id',$supervisor['user_id'])->first();
                            @endphp
                               <b style="text-transform:uppercase;" style="color: #2874A6">{{$supervisor['name']}}</b>
                            </h4>
                           </div>
                        </div>
                    </div>
                        <div class="card-body ">
                              <table class="table table-striped">
                                 <thead class="thead-dark">
                                     <tr>
                                         <th>
                                            #
                                         </th>
                                         <th>Student Name</th>
                                         <th>Registration No.</th>
                                         <th>Year of study</th>
                                         <th>Degree of programme</th>
                                         <th></th>
                                         <th></th>
                                     </tr>
                                 </thead>
                                 <tbody>
                                @foreach ($students as $student)
                                   <tr>
                                    <td>
                                        {{$loop->index + 1}}
                                    </td>
                                    <td>
                                       {{ $student->user->name }}
                                    </td>
                                   <td>
                                    {{ $student->registration_number}}
                                   </td>
                                    <td>{{ $student->year_of_study}}</td>
                                    <td>{{ $student->degree_programme}}</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                                   @endforeach
                                </tbody>

                             </table>
                            </div>
        </div>
        </div>
        </div>
        @endsection
