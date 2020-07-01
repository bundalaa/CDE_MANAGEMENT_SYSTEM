@extends('layouts.supervisorMenu')
@section('content')
<header id="dashboard" class="pt-4 pb-3">
        <div class="container pt-5 pb-0">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="text-info">
                        <i class="fas fa-book-open text-dark"></i> Reports
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
                            <a href="index.html" class="btn btn-muted btn-block">
                                <i class="fas fa-arrow-circle-left text-dark"></i> Back To Dashboard
                            </a>
                        </div>
                        <!-- <div class="col-md-3" >
                            <a href="#" class="btn btn-success btn-block">
                                <i class="fas fa-check-circle text-light"></i> Save Changes
                            </a>
                        </div> -->
                    </div>
                </div>
            </section>

            <section id="admin-panel">
                <div class="container">
                    <div class="row py-4">
                        <div class="col-sm-6 col-lg-3">
                            <div class="card" id="card-1">
                                <div class='embed-responsive embed-responsive-16by9'>
                                    <!-- <object data='pdf/Web Animation using JavaScript_ Develop & Design .pdf'
                                        type='application/pdf' width='100%' height='100%'></object> -->
                                    <embed src="pdf/Modern Web Design & Development.pdf" type="application/pdf"
                                        width="100%" class="embed-responsive-item"></embed>
                                </div>
                                <div class="card-footer bg-white pb-0">
                                    <small><i class="fas fa-file-pdf text-danger"></i> HTML.pdf</small>
                                    <p><small>Data Analysis</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card" id="card-2">
                                <!-- <div class='card-img-top'>
                                    <object data='pdf/Modern Web Design & Development.pdf' type='application/pdf' width='100%'
                                        height='100%'></object>
                                </div> -->
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="pdf/Modern Web Design & Development.pdf"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="card-footer bg-white pb-0">
                                    <small><i class="fas fa-file-pdf text-danger"></i> HTML.pdf</small>
                                    <p><small>Data Analysis</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card" id="card-3">
                                 <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="pdf/Modern Web Design & Development.pdf"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="card-footer bg-white pb-0">
                                    <small><i class="fas fa-file-pdf text-danger"></i> HTML.pdf</small>
                                    <p><small>Data Analysis</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card" id="card-4">
                                 <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="pdf/Modern Web Design & Development.pdf"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="card-footer bg-white pb-0">
                                    <small><i class="fas fa-file-pdf text-danger"></i> HTML.pdf</small>
                                    <p><small>Data Analysis</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row py-2">
                        <div class="col-sm-6 col-lg-3">
                            <div class="card" id="card-5">
                                 <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="pdf/Modern Web Design & Development.pdf"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="card-footer bg-white pb-0">
                                    <small><i class="fas fa-file-pdf text-danger"></i> HTML.pdf</small>
                                    <p><small>Data Analysis</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card" id="card-6">
                                 <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="pdf/Modern Web Design & Development.pdf"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="card-footer bg-white pb-0">
                                    <small><i class="fas fa-file-pdf text-danger"></i> HTML.pdf</small>
                                    <p><small>Data Analysis</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card" id="card-7">
                                 <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="pdf/Modern Web Design & Development.pdf"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="card-footer bg-white pb-0">
                                    <small><i class="fas fa-file-pdf text-danger"></i> HTML.pdf</small>
                                    <p><small>Data Analysis</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card" id="card-8">
                                 <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="pdf/Modern Web Design & Development.pdf"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="card-footer bg-white pb-0">
                                    <small><i class="fas fa-file-pdf text-danger"></i> HTML.pdf</small>
                                    <p><small>Data Analysis</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row pt-4 pb-5">
                        <div class="col-sm-6 col-lg-3">
                            <div class="card" id="card-9">
                                 <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="pdf/Modern Web Design & Development.pdf"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="card-footer bg-white pb-0">
                                    <small><i class="fas fa-file-pdf text-danger"></i> HTML.pdf</small>
                                    <p><small>Data Analysis</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card" id="card-10">
                                 <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="pdf/Modern Web Design & Development.pdf"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="card-footer bg-white pb-0">
                                    <small><i class="fas fa-file-pdf text-danger"></i> HTML.pdf</small>
                                    <p><small>Data Analysis</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card" id="card-11">
                                 <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="pdf/Modern Web Design & Development.pdf"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="card-footer bg-white pb-0">
                                    <small><i class="fas fa-file-pdf text-danger"></i> HTML.pdf</small>
                                    <p><small>Data Analysis</small></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card" id="card-12">
                                 <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="pdf/Modern Web Design & Development.pdf"
                                        allowfullscreen></iframe>
                                </div>
                                <div class="card-footer bg-white pb-0">
                                    <small><i class="fas fa-file-pdf text-danger"></i> HTML.pdf</small>
                                    <p><small>Data Analysis</small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            @endsection
