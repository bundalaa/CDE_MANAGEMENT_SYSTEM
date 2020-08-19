@extends('layouts.adminmenu')
@section('content')
<header id="dashboard" class="pt-3 pb-3">
    <div class="container pt-5 pb-0">
        <div class="row">
            <div class="col-md-6">
                <h1 style="color: #2874A6">
                    <i class="fa fa-envelope" aria-hidden="true"></i> Messages
                </h1>
            </div>
        </div>
    </div>
</header>
<div id="page-container">
    <div id="content-wrap">
        <section id="admin-panel" class="py-4">
            <div class="container">
                <div class="row pb-3">
                    <div class="col-md-12 d-flex justify-content-center flex-wrap flex-column">
                        <div class="card" id="card-table">
                            <div class="card-header">
                                <h4>Messages</h4>
                            </div>
        <table class="table table-striped">
             <thead class="thead-dark">
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Message</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>

                    <td>{{ $contact->name }}</td>

                    <td>{{ $contact->email }}
                    </td>
                    <td>{{ $contact->message }}
                    </td>
                    <td>
                    <a href="{{route('composemessageA',[$contact->id])}}" class="btn btn" style="background-color: #2874A6">
                            <i class="fas fa-plus"></i> Reply
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
          </table>
            {{-- <nav class="ml-4">
                            <div class="row">
                                <div class="col-12 text-center">
                                    {{$challenges->links()}}
                                </div>
                            </div>
                           </nav> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
