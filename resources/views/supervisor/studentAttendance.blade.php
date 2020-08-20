@extends('layouts.supervisorMenu')
@section('content')
    <header id="dashboard" class="pt-4 pb-3">
        <div class="container pt-5 pb-0">
            <div class="row">
                <div class="col-md-6">
                    <h1 style="color: #2874A6">
                        <i class="far fa-address-book text-dark"></i> Attendance
                    </h1>
                </div>
            </div>
        </div>
    </header>
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
    <div id="page-container">
        <div id="content-wrap">
            <section id="admin-panel" class="py-4">
                <div class="container">
                    <div class="row pb-3">
                        <div class="col-md-12 d-flex justify-content-center flex-wrap flex-column">
                            <div class="card" id="card-table">
                                <form action="{{route('addAttendance')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                <div class="card-header">
                                    <div class="row">
                                       <div class="3"> <h4>Class Attendance |  </h4></div>
                                            <div class='col-sm-3'>
                                                <div class="form-group">
                                                    <div class='input-group date' id='datetimepicker1'>
                                                    <input readonly type='text' class="form-control" name="attendance_date_report_id" value="{{\Carbon\Carbon::now()->isoFormat('DD-MM-YYYY')}}"/>
                                                        <span class="input-group-addon">
                                                            <span class="glyphicon glyphicon-calendar"></span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                </div>

                                <table class="table table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>Student</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            @php
                                            $number = 1;
                                            $status = isset($_POST['status']) ? $_POST['status'] : array();
                                        @endphp

                                            @foreach($students as $index=>$student)
                                            <tr>
                                                <td>
                                                    {{$number}}
                                                </td>
                                                 <td>{{ $student->user->name }}</td>
                                                 @php
                                                 $number++;
                                             @endphp
                                            <td>
                                                <input type="text" name="student_id[]" value="{{$student->id}}" hidden>
                                                <div class="form-group">
                                                    <select id="cars" name="status[]"  class="custom-select custom-select-sm mb-3">
                                                        <option value="0">Absent</option>
                                                        <option value="1">Present</option>
                                                        </select>
                                                        {{-- <input type="checkbox" name="status[]" value="off"> --}}
                                                    </div>

                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                  <div class="mr-auto ml-3 mb-3">
                                    <button class="btn btn px-3" type="submit" style="background-color: #2874A6"><i class="fas fa-save text-light"></i> Save</button>
                                </div>


                             <!-- Pagination -->
                             {{-- <nav class="ml-4">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        {{$students->links()}}
                                    </div>
                                </div>
                               </nav> --}}
                               </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <script>
            function checkFunction(){
                var checkBox=document.getElementById('check').checked;
                if(ckeckBox){
                    document.getElementById('link').href = '{{url('showheader/'.'true')}}';
                }
                else{
                    document.getElementById("link").href = '{{url('showheader/'.'false')}}';
                }
            }
        </script>
      @endsection
