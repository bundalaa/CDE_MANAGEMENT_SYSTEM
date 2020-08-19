@extends('layouts.supervisorMenu')
@section('content')
    <header id="dashboard" class="pt-4 pb-3">
        <div class="container pt-5 pb-0">
            <div class="row">
                <div class="col-md-6">
                    <h2>
                        <i class="fa fa-refresh fa-spin text-dark"></i> Fill Progress of <span style="color: #2874A6">{{$identifiedChallenge['name']}}</span>
                    </h2>
                </div>
            </div>
        </div>
    </header>
    <div id="page-container">
        <div id="content-wrap">
            <div class="container">
            <form action="{{route('postFillProgress')}}" method="post">
                @csrf
                {{-- <h2>Select Task Status </h2> --}}
                <table class="table table-dark table-striped mt-5">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Tasks</th>
                      <th>Status</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach ($tasks as $index=>$task)
                    <tr>
                    <td>{{$index+1}}</td>
                    <td>{{$task->name}}</td>
                      <td>
                      <select class="form-control" id="status_{{$task->id}}" name="{{$task->name}}" onchange="updateStatus('{{$task->id}}')">
                            <option value="">{{$task->status['name']}}</option>
                            @foreach($statuses as $status)
                        <option value="{{$status->value}}">{{$status->name}}</option>
                        @endforeach
                          </select>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
               </form>
        </div>  @endsection

        @section('scripts')
            <script>
                function updateStatus(tId) {
                    const taskId = tId;
                    const statusId = document.querySelector(`#status_${taskId}`).value;

                    const data = JSON.stringify({ 'task_id' : taskId, 'status_id' : statusId });

                    console.log(data);

                    fetch('/postFillProgress', {
                        method: 'post',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        body: data
                    }).then(response => response.json())
                    .then(data => {
                        console.log('Sucess', data);
                    })
                }
            </script>
        @endsection
