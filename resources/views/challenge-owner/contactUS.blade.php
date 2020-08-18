<!DOCTYPE html>
<html>

<head>
    <title>Contact US</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    </head>
    <style>
    /*contactus*/

    /* Float four columns side by side */
    .column {
        float: left;
        width: 50%;
        padding: 0 10px;
        margin-top: 1px;
    }

    /* Remove extra left and right margins, due to padding */
    .row {
        margin: 0 -5px;
    }

/* Float four columns side by side */
.column {
    float: left;
    width: 50%;
    padding: 0 10px;
    margin-top: 1px;
  }

  /* Remove extra left and right margins, due to padding */
  .row {margin: 0 -5px;}

  /* Clear floats after the columns */
  .row:after {
    content: "";
    display: table;
    clear: both;
  }

  /* Responsive columns */
  @media screen and (max-width: 600px) {
    .column {
      width: 100%;
      display: block;
      margin-bottom: 20px;
    }
  }

  /* Style the counter cards */
  .card {
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
    padding: 16px;
    margin-top: 10px;
    background-color: #f1f1f1;
  }
    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }

    /* Responsive columns */
    @media screen and (max-width: 600px) {
        .column {
            width: 100%;
            display: block;
            margin-bottom: 20px;
        }
    }

    /* Style the counter cards */
    .card {
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        padding: 16px;
        margin-top: 10px;
        background-color: #f1f1f1;
    }
    </style>
</head>

<body>
    @include('challenge-owner.components.top-nav')
    <div class="container">

        <div class="row">
            <div class="column">
                <div class="card">
                    <h3>CDE DETAILS</h3>
                    <p><strong>Email:</strong> cde@ac.tz</p>
                    <p>Phone:</p>
                    <p>PO Box:</p>
                    <p>Fax:</p>
                    <p>Address:Sayansi Kijitonyama (Dar es Salaam)</p>
                </div>
                <div class="card">
                    <div class="col-md-3">
                        <a href="https://dlab.or.tz/"><img src="images/coict.png" class="img-rounded" alt="Cinque Terre"
                                width="500px" height="300PX"> </a>
                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">

                    <h3>Contact US</h3>
                    @if(Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    {{-- {!! Form::open(['route'=>'contactus.store']) !!}
                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                        {!! Form::label('Name:') !!}
                        {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name'])
                        !!}
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>
                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                        {!! Form::label('Email:') !!}
                        {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter
                        Email']) !!}
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    </div>

                    <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}">
                        {!! Form::label('Message:') !!}
                        {!! Form::textarea('message', old('message'), ['class'=>'form-control',
                        'placeholder'=>'Enter Message']) !!}
                        <span class="text-danger">{{ $errors->first('message') }}</span>
                    </div>
                    <div class="form-group" style="text-align: center;">
                        <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                    {!! Form::close() !!} --}}
                    <form method="post" action="contact-us">
                        {{csrf_field()}}
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <label> Name </label>
                              <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Name" name="name">
                              @error('name')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                          </div>
                        <div class="col-md-12">
                          <div class="form-group">
                              <label> Email </label>
                              <input type="text" class="form-control @error('email') is-invalid @enderror" placeholder="Email" name="email">
                              @error('email')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                          </div>
                         <div class="col-md-12">
                           <div class="form-group">
                              <label> Message </label>
                              <textarea class="form-control textarea @error('message') is-invalid @enderror" placeholder="Message" name="message"></textarea>
                              @error('message')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>
                          </div>
                        </div>
                        <div class="row">
                         <div class="update ml-auto mr-auto">
                            <button type="submit" class="btn btn-info btn-round">Send</button>
                          </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
    <footer id="footer" class="bg-dark" style="margin-top:30px;color:white">
        <div class="py-2 text-center">
            <p> &copyright Udsm <span id="year"></span>
                <script>
                document.write(new Date().getFullYear());
                </script>, All rights reserved
            </p>
        </div>
    </footer>

    </div>
</body>

</html>
