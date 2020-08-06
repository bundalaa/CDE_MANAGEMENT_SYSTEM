@extends('layouts.supervisorMenu')
@section('content')
    <header id="dashboard" class="pt-4 pb-3">
        <div class="container pt-5 pb-0">
            <div class="row">
                <div class="col-md-6">
                    <h2>
                        <i class="fas fa-edit text-dark"></i> Edit Sub Challenge: <b class="text-info" style="font-size: 15px;text-transform:uppercase">{{$identifiedChallenge['name']}}</b>
                    </h2>
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
                            <a href="{{route('viewidentifiedchallenges')}}" class="btn btn-muted btn-block">
                                <i class="fas fa-arrow-circle-left text-dark"></i> Back To Sub Challenges
                            </a>
                        </div>
            </section>

            <section id="admin-panel" class="py-4">
                <div class="container">
                    <div class="row pt-3">
                        <div class="col-md-12 mb-4 d-flex justify-content-center flex-wrap flex-column">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Edit Sub Challenge</h4>
                                </div>
                                <div class="card-body px-5">
                                <form action="{{route('editidentifiedchallenge-screen', $identifiedChallenge->id)}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        {{-- @method('UPDATE') --}}
                                        <div class="form-group">
                                            <label for="Sub Challenge">Sub Challenge</label>
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <button class="btn btn-secondary">
                                                        <i class="far fa-folder-open"></i>
                                                    </button>
                                                </div>
                                                <input type="text" name="name" id="name"
                                                    class="form-control p-4" placeholder="Sub Challenge"
                                                     required value="{{ $identifiedChallenge['name'] }}" required>
                                            </div>
                                        </div>
                                        <label for="description">Description</label>
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <button class="btn btn-secondary">
                                                    <i class="far fa-folder-open"></i>
                                                </button>
                                            </div>
                                            <input type="text" name="description"
                                                class="form-control p-4" placeholder="Description"
                                                 required value="{{ $identifiedChallenge['description'] }}" required>
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
        @endsection
