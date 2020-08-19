<!doctype html>
<html lang="en">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- title {{ config('app.name', 'Laravel') }} -->
<title>Challenge owner</title>

<!-- Scripts {{ config('app.name', 'Laravel') }} -->
<script src="{{ asset('js/app.js') }}" defer></script>

<!-- Fonts -->
<link href="{{ asset('css/fontawesome.css') }}" rel="stylesheet">
<link href="{{ asset('css/fonts.css') }}" rel="stylesheet">


<!-- Styles -->
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link href="{{ asset('css/widgets.css') }}" rel="stylesheet">

<style>
/*** Left Nav ***/
.nav-link.active {
    background: #D1F2EB !important;
    border-color: #D1F2EB !important;
}

.logo-text {
    text-align: center;
    color: #fff;
}

.section-divider {
    height: 2px;
    background: #dddddd;
    margin-top: 4em
}

.section-heading {
    background: #dddddd;
    margin-bottom: 1em;
    display: inline-block;
    border-bottom-left-radius: 6px;
    border-bottom-right-radius: 6px;
}

.section-heading h5 {
    color: #414141;
    padding: 4px 1em;
    margin: 0
}

.new-employee-wrapper {
    padding: 1em;
    border: 2px dashed #cccccc;
    background: #f4f4f1;
    margin-top: 2em;
}

.content-wrapper {
    padding: 1em;
    border-left: 1px solid #cccccc;
    border-right: 1px solid #cccccc;
    border-bottom: 1px solid #cccccc;
}

.list-wrapper {
    padding: 1em;
}

/*
        .navbar-nav{

            /*background: #ffa23b;*/
/* } */
*/ .nav-item-heading {
    border-bottom: 1px solid #fff8b3;
    border-bottom-left-radius: 8px;
    color: #fff;
    padding: 0.2em;
    margin-top: 1em;
    width: 100%;

}

.left-menu-link {
    color: #eeeeee !important;
}

/*** [[End]] Left Nav ***/
</style>

<body>


        <div id="app">
            <div class="container-fluid">
                <div class="row">

                    @include('challenge-owner.components.left-nav')

                    <div class="col-lg-9" style="padding-left:0; padding-right: 0;">


                        @include('challenge-owner.components.top-nav-dashboad')

                        <div class="container">
                            <main class="py-4">
                                <div class="row justify-content-center">
                                    <div class="col-md-12">

                                        <div class="card" style="margin:5px;">
                                            <!-- HealthCare provider heading -->
                                            <div class="card-header">
                                                <form action="{{route('fileUpload')}}" method="post"
                                                    enctype="multipart/form-data">
                                                    @foreach($coordinators as $coordinator)
                                            <input type="text" name="coordinator_id" value="{{$coordinator->id}}" hidden>
                                            @endforeach
                                            <input type="text" name="challengeOwner_id" value="{{$user->id}}" hidden>
                                                    <h3 class="text-center mb-5">Upload Problem Statement File</h3>
                                                    <div style="display: none;">
                                                    {{-- <label >
                                                            email</label>
                                                        <input type="text" name="email"
                                                        class="form-control" value="{{Auth::user()->email}}">
                                                        <label>
                                                            name</label>
                                                        <input type="text" name="sender_name"
                                                        class="form-control" value="{{Auth::user()->name}}"> --}}


                                                    </div>
                                                    @csrf
                                                    @if ($message = Session::get('success'))
                                                    <div class="alert alert-success">
                                                        <strong>{{ $message }}</strong>
                                                    </div>
                                                    @endif

                                                    @if (count($errors) > 0)

                                                    <div class="alert alert-danger">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                    @endif

                                                    <div class="custom-file">
                                                        <input type="file" name="file" class="custom-file-input"
                                                            id="chooseFile">
                                                        <label class="custom-file-label" for="chooseFile">Select
                                                            file</label>
                                                    </div>



                                                    <button type="submit" name="submit"
                                                        class="btn btn-primary btn-block mt-4">
                                                        Upload Files
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </main>
                        </div>

                        <footer id="footer" class="bg-dark"
                            style="width:100%; float:right; margin-top:400px; color:white">
                            <div class="py-2 text-center">
                                <p> &copyright Udsm <span id="year"></span>
                                    <script>
                                    document.write(new Date().getFullYear());
                                    </script>, All rights reserved
                                </p>
                            </div>
                        </footer>
                    </div>
                </div>

                <script>
                // Add the following code if you want the name of the file appear on select
                $(".custom-file-input").on("change", function() {
                    var fileName = $(this).val().split("\\").pop();
                    $(this).siblings(".custom-file-label").addClass("selected")
                        .html(
                            fileName);
                });
                </script>

    </body>

</html>
