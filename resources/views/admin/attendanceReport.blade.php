@extends('layouts.adminmenu')
@section('content')
<header id="dashboard" class="pt-5 pb-3">
    <div class="container  pt-3 pb-0">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-info">
                    <i class="far fa-address-card text-dark"></i>  Attendance Report
                </h1>
            </div>

            <div class="col-md-6 ml-auto">
                <div class="input-group">
<select name="date" id="date" onChange="onChange(this)">
@if($report != null)
<option value="{{$report->id}}">{{$report->attendance_date}}</option>
@endif
@foreach($reports as $theReport)
<option value="{{$theReport->id}}">{{$theReport->attendance_date}}</option>
    @endforeach
</select>
                    <div class="input-group-append">
                        <button class="btn btn-info">Select Attendance Date</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

@if($report != null)
    <div id="page-container">
        <div id="content-wrap">
            <section id="admin-panel" class="py-4">
                <div class="container">
                    <div class="row pb-3">
                        <div class="col-md-12 d-flex justify-content-center flex-wrap flex-column">
                            <div class="card" id="card-table">
                                <div class="card-header">
                                   <div class="row">
                                    <div class="col-6"> <h4>Class Attendance | <span class="text-info">{{$report->created_at}}</span></h1></div>
                                        <div class="col-6">
                                            <a class="btn btn-primary float-right" href="{{URL::to('/attendance/pdf') }}">Export to PDF</a>
                                           </div>
                                   </div>
                                </div>

                                <table class="table table-striped">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>#</th>
                                            <th>Student-name</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($report->attendance as $attendance)
                                        <tr>
                                            <td>{{ $attendance->student_id }}</td>
                                            <td>{{ $attendance->student['user']['name']}}</td>
                                            <td>@if($attendance->status)
                                                Present
                                                @else
                                                Absent
                                                @endif</td>
                                      </tr>
                                        @endforeach
                                    </tbody>
                                </table>

                                <!-- Pagination -->

                                <div class="ml-auto mr-3 mb-3">
                                    <button class="btn btn-secondary px-3"><i class="fas fa-print"></i> Print</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @endif
        <script>
            function onChange(report_id){

                var id=report_id.options[report_id.selectedIndex].value;
                window.location.href = "/getReport/"+id;
            }
        </script>
        @endsection
