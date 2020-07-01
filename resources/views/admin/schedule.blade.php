@extends('layouts.menu')
@section('content')
    <header id="dashboard" class="pt-3 pb-3">
        <div class="container  pb-0">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-info">
                        <i class="fa fa-calender text-dark"></i> Schedule
                    </h1>
                </div>
            </div>
        </div>
    </header>
    <div id="page-container">
        <div id="content-wrap">
        <div class="row">
            <div class="col-5">
            <form action="/schedule" method="POST">
                    {{-- {{ csrf_field() }} --}}
                    @csrf
                    Task name:
                    <br />
                    <input type="text" name="name" />
                    <br /><br />
                    Task description:
                    <br />
                    <textarea name="description"></textarea>
                    <br /><br />
                    Task Date:
                    <br />
                    <input type="text" name="task_date" class="date" />
                    <br /><br />
                    <input type="submit" value="Save" />
                  </form>
            </div>
            <div class="col-7">
                <div id='calendar'></div>
            </div>
        </div>
            </div>
            @endsection
{{-- <script>
    $(document).ready(function() {
        // page is now ready, initialize the calendar...
        $('#calendar').fullCalendar({
            // put your options and callbacks here
            events : [
                @foreach($schedules as $schedule)
                {
                    title : '{{ $schedule->name }}',
                    start : '{{ $schedule->task_date }}',
                    url : '{{ route('schedules.edit', $schedules->id) }}'
                },
                @endforeach
            ]
        })
    });
</script> --}}


