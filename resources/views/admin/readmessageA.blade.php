@extends('layouts.supervisorMenu')
@section('content')
<header id="dashboard" class="pt-4 pb-3">
    <div class="container pt-5 pb-0">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-info">
                    <i class="far fa-envelope text-dark"></i> Messages
                </h1>
            </div>
        </div>
    </div>
</header>
{{-- <div class="content-wrapper"> --}}
    <div id="page-container">
        <div id="content-wrap">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-3">
          <a href="{{route('composemessage')}}" class="btn btn-info btn-block mb-3">Compose</a>

          <div class="card">
            <div class="card-header">

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <ul class="nav nav-pills flex-column">
                <li class="nav-item active">
                <a href="{{route('inboxmessage')}}" class="nav-link">
                    <i class="fas fa-inbox text-info"></i> Inbox
                    <span class="badge bg-secondary float-right">12</span>
                  </a>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
            <div class="card card-primary card-outline">
                <div class="card-header">
                  <h3 class="card-title">Read Messages</h3>

                  <div class="card-tools">
                    <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Previous"><i class="fas fa-chevron-left"></i></a>
                    <a href="#" class="btn btn-tool" data-toggle="tooltip" title="Next"><i class="fas fa-chevron-right"></i></a>
                  </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body p-0">
                  <div class="mailbox-read-info">
                    <h5>Message Subject Is Placed Here</h5>
                    <h6>From: support@adminlte.io
                  </div>

                  <div class="mailbox-read-message">
                    <p>Hello John,</p>

                    <p>Keffiyeh blog actually fashion axe vegan, irony biodiesel. Cold-pressed hoodie chillwave put a bird
                      on it aesthetic, bitters brunch meggings vegan iPhone. Dreamcatcher vegan scenester mlkshk. Ethical
                      master cleanse Bushwick, occupy Thundercats banjo cliche ennui farm-to-table mlkshk fanny pack
                      gluten-free. Marfa butcher vegan quinoa, bicycle rights disrupt tofu scenester chillwave 3 wolf moon
                      asymmetrical taxidermy pour-over. Quinoa tote bag fashion axe, Godard disrupt migas church-key tofu
                      blog locavore. Thundercats cronut polaroid Neutra tousled, meh food truck selfies narwhal American
                      Apparel.</p>

                  </div>
                  <!-- /.mailbox-read-message -->
                </div>
                <!-- /.card-body -->

                <!-- /.card-footer -->
                <div class="card-footer">
                  <div class="float-right">
                    <button type="button" class="btn btn-default"><i class="fas fa-reply"></i> Reply</button>
                    <button type="button" class="btn btn-default"><i class="fas fa-share"></i> Forward</button>
                  </div>
                  <button type="button" class="btn btn-default"><i class="far fa-trash-alt"></i> Delete</button>
                </div>
                <!-- /.card-footer -->
              </div>
              <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>


<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
@endsection
