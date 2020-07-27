@extends('layouts.supervisorMenu')
@section('content')
<header id="dashboard" class="pt-4 pb-3">
    <div class="container pt-5 pb-0">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-info">
                    <i class="far fa-folder-open text-dark"></i> Add Challenge
                </h1>
            </div>
        </div>
    </div>
</header>

<div id="page-container">
    <div id="content-wrap">
        <section id="admin-panel" class="pt-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Add challenge</h4>
                            </div>
                            <div class="card-body px-5">
                            <form action="{{route('addChallenge')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                    <div class="form-group">
                                        <label for="Challenge Title"></label>
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <button class="btn btn-info">
                                                    <i class="fas fa-folder-open"></i>
                                                </button>
                                            </div>
                                            <input type="text" name="name" id="title" class="form-control p-4"
                                                placeholder="Title" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Category Description"></label>
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <button class="btn btn-info">
                                                    <i class="fas fa-folder-open"></i>
                                                </button>
                                            </div>
                                            <input type="text" name="description" id="description" class="form-control p-4"
                                                placeholder="Description" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="submit" id="submit"
                                            class="form-control btn-secondary"><i class="fas fa-check-circle"></i>
                                            Save
                                            Changes
                                        </button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                {{-- <div class="row my-5">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Add category to a team</h4>
                            </div>
                            <div class="card-body px-5">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <label for="Team"></label>
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <button class="btn btn-info">
                                                    <i class="fas fa-users"></i>
                                                </button>
                                            </div>
                                            <input type="text" name="team" id="team" class="form-control p-4"
                                                placeholder="Team" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Category"></label>
                                        <div class="input-group">
                                            <div class="input-group-append">
                                                <button class="btn btn-secondary">
                                                    <i class="far fa-folder"></i>
                                                </button>
                                            </div>
                                            <input type="text" name="text" id="text" class="form-control p-4"
                                                placeholder="Category" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" name="submit" id="submit"
                                            class="form-control btn-info"><i class="fas fa-check-circle"></i>
                                            Save
                                            Changes
                                        </button>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div> --}}
            </div>
        </section>
    </div>
@endsection
