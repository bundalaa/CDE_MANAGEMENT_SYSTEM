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
                    <h1 class="text-info">
                        <i class="fas fa-users text-dark"></i> List of Students
                    </h1>
                </div>
            </div>
        </div>
    </header>
    <div id="page-container">
        <div id="content-wrap">
<div class="container">
    <br>
<h3 >Add Students To a Team:
@php
    $challenged = Team::where('id',$id)->first();
    $challenges = IdentifiedChallenge::where('id',$challenged['identified_challenge_id'])->first();
    $studented = Student::where('team_id',null)->get();
@endphp
   <b style="text-transform:uppercase;" class="text-info">{{$challenges['name']}}</b>
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
            <button type="submit" class="btn btn-info mb-2" style="float: right">Save Student</button>
        </form>
                 </div>
                    </div>
                </div>
       @endsection













{{--
       <div class="card-subtitle mt-2">
        <div class="col-md-12 ml-auto">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Students...">
                <div class="input-group-append">
                    <button class="btn btn-info">Search</button>
                </div>
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
                     <th>Student_Name</th>
                     <th></th>
                 </tr>
             </thead>
             <tbody>

                    @php
                    $number = 1;
                @endphp
           @foreach($students as $student)
               <tr>
                <td>
                    {{$number}}
                </td>
                <td scope="row">
                   {{ $student->name }}
                </td>
               <td><form action="{{route('addStudentToTeam')}}" method="POST" enctype="multipart/form-data">
                @csrf
               <input type="text" name="student_id" value="{{$student->id}}"
                hidden>
                <input type="text" name="team_id" value="{{$team->id}}"
                hidden>
<button type="submit" class="btn btn-info mb-2" style="float: right">Add Student</button>
             </form>
               </td>
                @php
                    $number++;
                @endphp
            </tr>
               @endforeach
            </tbody>

         </table>
        </div> --}}
