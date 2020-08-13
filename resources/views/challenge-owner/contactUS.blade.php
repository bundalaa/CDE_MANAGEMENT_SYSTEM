<!DOCTYPE html>
    <html>
    <head>
    <title>Contact US</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> -->
    </head>
    <style>

/* Float four columns side by side */
.column {
  float: left;
  width: 50%;
  padding: 0 10px;
  margin-top: 1px;
}

/* Remove extra left and right margins, due to padding */
.row {margin: 0 -5px;}

/*contactus*/

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


  </style>
  </head>

    <body>
	@include('Challenge-owner.component.top-nav')

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
  <a href="https://dlab.or.tz/"><img src="images/coict.png" class="img-rounded" alt="Cinque Terre" width="500px" height="300PX"> </a>
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
    {!! Form::open(['route'=>'contactus.store']) !!}
    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    {!! Form::label('Name:') !!}
    {!! Form::text('name', old('name'), ['class'=>'form-control', 'placeholder'=>'Enter Name']) !!}
    <span class="text-danger">{{ $errors->first('name') }}</span>
    </div>
    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
    {!! Form::label('Email:') !!}
    {!! Form::text('email', old('email'), ['class'=>'form-control', 'placeholder'=>'Enter Email']) !!}
    <span class="text-danger">{{ $errors->first('email') }}</span>
    </div>
    <div class="form-group {{ $errors->has('message') ? 'has-error' : '' }}" >
    {!! Form::label('Message:') !!}
    {!! Form::textarea('message', old('message'), ['class'=>'form-control', 'placeholder'=>'Enter Message']) !!}
    <span class="text-danger">{{ $errors->first('message') }}</span>
    @foreach($coordinators as $coordinator)
    <input type="text" name="coordinator_id" value="{{$coordinator->id}}" hidden>
    @endforeach
    </div>
    <div class="form-group" style="text-align: center;">
    <button class="btn btn-success">Submit</button>
    </div>
    {!! Form::close() !!}
</div>
</div>
    </div>
    </body>
    </html>
