@extends('layouts.supervisorMenu')
@section('content')
    <header id="dashboard" class="pt-4 pb-3">
        <div class="container pt-5 pb-0">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-info">
                        <i class="fas fa-users-cog text-dark"></i> Edit Team
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
                            <a href="teams" class="btn btn-muted btn-block">
                                <i class="fas fa-arrow-circle-left text-dark"></i> Back To Teams
                            </a>
                        </div>
                        <div class="col-md-3">
                            <a href="#" class="btn btn-danger btn-block">
                                <i class="fas fa-trash-alt text-light"></i> Delete Team
                            </a>
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
                                    <h4>Edit Team</h4>
                                </div>
                                <div class="card-body px-5">
                                    <form action="" method="post">
                                        <div class="form-group">
                                            <label for="Team">Team</label>
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <button class="btn btn-info">
                                                        <i class="fas fa-users"></i>
                                                    </button>
                                                </div>
                                                <input type="text" name="team" id="team"
                                                    class="form-control p-4" placeholder="Team" value="Soprano"
                                                    required>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="Category">Category</label>
                                            <div class="input-group">
                                                <div class="input-group-append">
                                                    <button class="btn btn-secondary">
                                                        <i class="far fa-folder-open"></i>
                                                    </button>
                                                </div>
                                                <input type="text" name="category" id="category"
                                                    class="form-control p-4" placeholder="Category" value="Musical"
                                                    required>
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
                    </div>
                </div>
            </section>
        </div>
        @endsection
