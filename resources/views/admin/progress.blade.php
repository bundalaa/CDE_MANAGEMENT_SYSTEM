@php
    use App\Status;
@endphp
@extends('layouts.adminmenu')
@section('content')
    <header id="dashboard" class="pt-5 pb-3">
        <div class="container pt-3 pb-0">
            <div class="row">
                <div class="col-md-6">
                    <h1 style="color: #2874A6">
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
          <div class="card mt-5">
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
                    <th style="width: 40px">Percentage</th>
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
                            $stat= Status::where('value',$task->status_id)->first();
                          @endphp
                        {{$stat['name']}}
                      </div>
                    </td>
                    <td>
                    @if($task->status_id == 0)
                        <span class="badge bg-danger">0%</span>
                    @endif
                    @if($task->status_id == 40)
                            <span class="badge bg-danger">40%</span>
                        @endif
                        @if($task->status_id == 60)
                                <span class="badge bg-danger">60%</span>
                            @endif
                            @if($task->status_id == 80)
                                    <span class="badge bg-danger">80%</span>
                                @endif
                                @if($task->status_id == 100)
                                        <span class="badge bg-danger">100%</span>
                                    @endif
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
               <nav class="ml-4">
                                <div class="row">
                                    <div class="col-12 text-center">
                                        {{$identifiedchallenges->links()}}
                                    </div>
                         </div>
                    </nav>
            </div>
          </div>
        </div>
        @endforeach
      </div>

      </div>


      @endsection
