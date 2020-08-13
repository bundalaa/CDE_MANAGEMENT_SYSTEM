@php
    use App\Status;
@endphp
@extends('layouts.adminmenu')
@section('content')
    <header id="dashboard" class="pt-5 pb-3">
        <div class="container pt-3 pb-0">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-info">
                        <i class="fa fa-dashboard text-dark"></i> Dashboard
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <div id="page-container">
        <div id="content-wrap">
   <!-- Main content -->
   <section class="content">
    <div class="container-fluid">
      <div class="row">
        @foreach($identifiedchallenges as $identifiedchallenge)
        <div class="col-md-6">
          <div class="card">
            <div class="card-header">
            <h3 class="card-title">{{$identifiedchallenge->name}}</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Task</th>
                    <th>Progress</th>
                    <th style="width: 40px">Label</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach($identifiedchallenge->tasks as $task)
                  <tr>
                  <td>{{$task->id}}</td>
                  <td>{{$task->name}}</td>
                    <td>
                      <div class="progress progress-xs">
                          @php
                            $stat= Status::where('id',$task->status_id)->first();
                          @endphp
                        {{$stat->name}}
                      </div>
                    </td>
                    <td>
                    @if($task->status_id == 1)
                        <span class="badge bg-danger">0%</span>
                    @endif
                    @if($task->status_id == 2)
                            <span class="badge bg-danger">40%</span>
                        @endif
                        @if($task->status_id == 3)
                                <span class="badge bg-danger">60%</span>
                            @endif
                            @if($task->status_id == 4)
                                    <span class="badge bg-danger">80%</span>
                                @endif
                                @if($task->status_id == 5)
                                        <span class="badge bg-danger">100%</span>
                                    @endif
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
        @endforeach
      </div>
          <!-- /.card -->
          {{-- <div class="card">
            <div class="card-header">
              <h3 class="card-title">Pyroll System</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th style="width: 10px">#</th>
                    <th>Task</th>
                    <th>Progress</th>
                    <th style="width: 40px">Label</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($tasks as $task)
                <tr>
                <td>{{$task->id}}</td>
                <td>{{$task->status->name}}</td>
                  <td>
                    <div class="progress progress-xs">
                        {{$task->status->name}}
                    </div>
                  </td>
                  <td><span class="badge bg-danger">55%</span></td>
                </tr>
                @endforeach
                </tbody>
              </table>
            </div>
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">opras</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Task</th>
                      <th>Progress</th>
                      <th style="width: 40px">Label</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($tasks as $task)
                  <tr>
                  <td>{{$task->id}}</td>
                  <td>{{$task->status->name}}</td>
                    <td>
                      <div class="progress progress-xs">
                        {{$task->status->name}}
                      </div>
                    </td>
                    <td><span class="badge bg-danger">55%</span></td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Online Attendance</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th style="width: 10px">#</th>
                        <th>Task</th>
                        <th>Progress</th>
                        <th style="width: 40px">Label</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($tasks as $task)
                    <tr>
                    <td>{{$task->id}}</td>
                    <td>{{$task->status->name}}</td>
                      <td>
                        <div class="progress progress-xs">
                            {{$task->status->name}}
                        </div>
                      </td>
                      <td><span class="badge bg-danger">55%</span></td>
                    </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div> --}}
            <!-- /.card -->
          {{-- </div> --}}
        <!-- /.col -->
      </div>


      @endsection
