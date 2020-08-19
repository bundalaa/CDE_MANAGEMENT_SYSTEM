<body style="background:  #e6ecf0; width:100%">

    <div id="app">
        <div class="container-fluid">
            <div class="row">

                @include('challenge-owner.components.left-nav')

                <div class="col-lg-9" style="padding-left:0; padding-right: 0;">


                    @include('challenge-owner.components.top-nav-dashboad')

<table class="table table-striped table-inverse table-responsive">
    <thead class="thead-inverse">
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
            @foreach($messages as $index=>$message)
            <tr>
            <td>{{$index+1}}</td>
            <td>{{$message->file->name}}</td>
            <td>{{$message->body}}</td>
            </tr>
    @endforeach
        </tbody>
</table>
</body>

