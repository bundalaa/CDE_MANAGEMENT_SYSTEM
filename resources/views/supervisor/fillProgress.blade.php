@extends('layouts.supervisorMenu')
@section('content')
    <header id="dashboard" class="pt-4 pb-3">
        <div class="container pt-5 pb-0">
            <div class="row">
                <div class="col-md-6">
                    <h1>
                        <i class="fa fa-refresh fa-spin text-dark"></i> Fill Progress of <span class="text-info">{{$identifiedChallenge['name']}}</span>
                    </h1>
                </div>
            </div>
        </div>
    </header>
    <div id="page-container">
        <div id="content-wrap">
            <div class="container">
            <form action="{{route('postFillProgress')}}" method="post">
                @csrf
                <h2>Select Task Status </h2>
                <table class="table table-dark table-striped">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Tasks</th>
                      <th>Status</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($tasks as $task)
                    <tr>
                    <td>{{$task->id}}</td>
                    <td>{{$task->name}}</td>
                      <td>
                      <select class="form-control" id="name" name="{{$task->name}}">
                            <option value="">Select Status</option>
                            @foreach($statuses as $status)
                        <option value="{{$status->id}}">{{$status->name}}</option>
                        @endforeach
                          </select>[]
                      </td>
                      <td><div class="form-group">
                        <button type="submit"  id="submit"
                            class="form-control btn-info"><i class="fas fa-check-circle"></i>
                            Save
                            Changes
                        </button>
                  </div></td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
                {{-- <div class="form-group">
                    <button type="submit" name="submit" id="submit"
                        class="form-control btn-info"><i class="fas fa-check-circle"></i>
                        Save
                        Changes
                    </button>
              </div> --}}
               </form>
        </div>
        @endsection
