@extends('layouts.supervisorMenu')
@section('content')
@php
    use App\IdentifiedChallenge;
    use App\Team;
    use App\User;
    use App\Student;
@endphp
    <header id="dashboard" class="pt-4 pb-3">
        <div class="container pt-5 pb-0">
            <div class="row">
                <div class="col-md-6">
                    <h1 style="color: #2874A6">
                        <i class="fas fa-users text-dark"></i> List of Students
                    </h1>
                </div>
            </div>
        </div>
    </header>
    <div id="page-container">
        <div id="content-wrap">
<div class="container">
    <div class="col-md-3 pt-2">
        <a href="{{route('viewteam')}}" class="btn btn-muted btn-block">
            <i class="fas fa-arrow-circle-left text-dark"></i> Back To Team
        </a>
    </div>
    <br>
<h3>Add Students To a Team:
@php
    $challenged = Team::where('id',$id)->first();
    $challenges = IdentifiedChallenge::where('id',$challenged['identified_challenge_id'])->first();
    $studented = Student::where('team_id',null)->get();
@endphp
   <b style="text-transform:uppercase;color: #2874A6">{{$challenges['name']}}</b>
</h3>
<form action="{{route('addStudentToTeam')}}" method="POST" enctype="multipart/form-data">
    @csrf
        <input type="text" name="team_id" value="{{$id}}" hidden>
            <div class="form-group">
                <select class="form-control" name="student_id">
                    @foreach ($studented as $item)
                        @php
                            $student = User::where('id',$item->user_id)->first();
                        @endphp
                            <option value="{{$student['id']}}">{{$student['name']}}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn mb-2" style="float: right;background-color: #2874A6">Save Student</button>
        </form>
                 </div>
                    </div>
                </div>
       @endsection


