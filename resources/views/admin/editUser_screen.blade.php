@extends('layouts.menu')
@section('content')
@php
    use App\Role;
@endphp
    <header id="dashboard" class="pt-3 pb-3">
        <div class="container pt-1 pb-0">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-info">
                        <i class="fas fas fa-graduation-cap text-dark"></i> Edit User {{$user['name']}}
                    </h1>
                </div>
            </div>
        </div>
    </header>
    <div id="page-container">
        <div id="content-wrap">
            <section id="add" class="py-4 bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <a href="{{url('/')}}" class="btn btn-muted btn-block">
                                <i class="fas fa-arrow-circle-left text-dark"></i> Back To Dashboard
                            </a>
                        </div>
                        <div class="col-md-3">
                            <button type="button" class="btn btn-danger btn-block" data-toggle="modal" data-target="#exampleModal">
                                <i class="fas fa-trash-alt text-light"></i> Delete User</button>
                            <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        </div>
        <div class="modal-body"> Do you want to delete this user? </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">NO</button>
        <form action="{{url('deleteUser', [$user['id']])}}" method="POST">
            @csrf
            @method('DELETE')
            <button type="button" class="btn btn-secondary">YES</button>
        </form>
      </div>
      </div>
    </div>
  </div>
    </div>
                    </div>
                </div>
            </section>
            <section id="admin-panel" class="py-4">
                <div class="container">
                    <div class="row pt-3">
                        <div class="col-md-12 mb-4 d-flex justify-content-center flex-wrap flex-column">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Edit User</h4>
                                </div>
                                <div class="card-body px-5">
                                <form action="{{url('editUser', [$user['id']])}}" method="PUT">
                                    @csrf
                                    @method('PUT')
                                        <div class="form-group">
                                            <label for="Username"></label>
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <button class="btn btn-info">
                                                        <i class="far fa-user"></i>
                                                    </button>
                                                </div>
                                                <input type="text" name="name" id="username"
                                                    class="form-control p-4" placeholder="Username"
                                            value="{{ $user['name'] }}" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Email"></label>
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <button class="btn btn-secondary">
                                                        <i class="far fa-envelope"></i>
                                                    </button>
                                                </div>
                                                <input type="email" name="email" id="email" class="form-control p-4"
                                            placeholder="Email address" value="{{ $user['email'] }}" required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="name"></label>
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <button class="btn btn-info">
                                                        Role
                                                    </button>
                                                </div>
                                                @php
                                                    $role=Role::where('id',$user['role_id'])->first();
                                                @endphp
                                                <select style="color: #000;" name="role" class="form-control" id="">
                                                    <option selected
                                                    value="{{$role['id']}}">{{$role['name']}}</option>
                                                    <option value="1">Admin</option>
                                                    <option value="2"> Supervisor</option>
                                                    <option value="3">Student</option>
                                                    <option value="4">Challenge owner</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" name="submit" id="submit"
                                                class="form-control btn-info"><i class="fas fa-check-circle"></i> Save
                                                Changes
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>


@endsection
