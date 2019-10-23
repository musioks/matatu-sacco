<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>ONLINE MATATU SACCO SYSTEM </title>

    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ asset('css/parsley.css')}}" rel="stylesheet">
  </head>
  <body>
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{url('/')}}">ONLINE MATATU SACCO SYSTEM</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="{{url('/')}}">Adverts</a></li>
        <li class="active"><a href="{{url('/hire')}}">Hire Matatu</a></li>
        <li><a href="{{ route('complains') }}">Complains</a></li>

      </ul>

      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{url('/register')}}">Register</a></li>
        <li><a href="{{url('/login')}}">Login</a></li>

      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div class="container">
&nbsp;
    <div class="page-title">
          <div>
            <h1><i class="fa fa-info"></i> ONLINE MATATU SACCO SYSTEM</h1>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Sacco</li>
              <li><a href="{{route('hire')}}">Hire</a></li>
            </ul>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading text-center">Hire A Matatu Here</div>
          <div class="panel-body">
            @include('_message')
            <div class="row">
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-8">
                    <img src="{{asset('images/bus.jpg')}}" alt="click the button to hire" class="img-thumbnail">
                  </div>
                  <div class="col-md-4">
                    <p>its a 32 bus seater for long distance</p>
                    <a href="#" class="btn btn-info btn-block btn-sm" title="Click to hire" data-toggle="modal" data-target="#myModal">HIRE</a>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="row">
                  <div class="col-md-8">
                    <img src="{{asset('images/bus.jpg')}}" alt="click the button to hire" class="img-thumbnail">
                  </div>
                  <div class="col-md-4">
                    <p>its a 32 bus seater for long distance</p>
                    <a href="#" class="btn btn-info btn-block btn-sm" title="Click to hire" data-toggle="modal" data-target="#myModal">HIRE</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-8">
                  <img src="{{asset('images/bus.jpg')}}" alt="click the button to hire" class="img-thumbnail">
                </div>
                <div class="col-md-4">
                  <p>its a 32 bus seater for long distance</p>
                  <a href="#" class="btn btn-info btn-block btn-sm" title="Click to hire" data-toggle="modal" data-target="#myModal">HIRE</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-8">
                  <img src="{{asset('images/bus.jpg')}}" alt="click the button to hire" class="img-thumbnail">
                </div>
                <div class="col-md-4">
                  <p>its a 32 bus seater for long distance</p>
                  <a href="#" class="btn btn-info btn-block btn-sm" title="Click to hire" data-toggle="modal" data-target="#myModal">HIRE</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-8">
                  <img src="{{asset('images/bus.jpg')}}" alt="click the button to hire" class="img-thumbnail">
                </div>
                <div class="col-md-4">
                  <p>its a 32 bus seater for long distance</p>
                  <a href="#" class="btn btn-info btn-block btn-sm" title="Click to hire" data-toggle="modal" data-target="#myModal">HIRE</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-8">
                  <img src="{{asset('images/bus.jpg')}}" alt="click the button to hire" class="img-thumbnail">
                </div>
                <div class="col-md-4">
                  <p>its a 32 bus seater for long distance</p>
                  <a href="#" class="btn btn-info btn-block btn-sm" title="Click to hire" data-toggle="modal" data-target="#myModal">HIRE</a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-8">
                  <img src="{{asset('images/bus.jpg')}}" width="320" height="200" alt="click the button to hire" class="img-thumbnail">
                </div>
                <div class="col-md-4">
                  <p>its a 32 bus seater for long distance</p>
                  <a href="#" class="btn btn-info btn-block btn-sm" title="Click to hire" data-toggle="modal" data-target="#myModal">HIRE</a>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class="col-md-8">
                  <img src="{{asset('images/bus1.jpg')}}" width="320" height="200"  alt="click the button to hire" class="img-thumbnail">
                </div>
                <div class="col-md-4">
                  <p>its a 32 bus seater for long distance</p>
                  <a href="#" class="btn btn-info btn-block btn-sm" title="Click to hire" data-toggle="modal" data-target="#myModal">HIRE</a>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Book Here</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ route('bookings.store') }}" data-parsley-validate="">
          {{csrf_field()}}
          <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" required="">
          </div>
           <div class="form-group">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter phone" required="">
          </div>
          <div class="form-group">
            <label for="email">Email address</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required="">
          </div>
          <div class="form-group">
            <label for="destination">Destination</label>
            <input type="text" class="form-control" id="destination" name="destination" placeholder="Destination" required="">
          </div>
           <label for="date_event">Event Date</label>
           <div class="form-group">
           <input class="form-control" placeholder="Date of the event" name="event_date" id="demoDate" type="text" required="">
     </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning pull-left" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
        </form>
      </div>
    </div>
  </div>
</div>
    <hr>
    <div class="well">
    <h5 class="text-center">Contact the system administrator via this email:<br>&nbsp;&nbsp;
    admin@onlinesacco.com</h5>

    </div>
    <!-- jQuery -->
  <script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
     <script src="{{asset('js/plugins/jquery.dataTables.min.js')}}"></script>
     <script src="{{asset('js/plugins/parsley.min.js')}}"></script>
    <script  src="{{asset('js/plugins/dataTables.bootstrap.min.js')}}"></script>
    <script type="text/javascript">$('#sampleTable').DataTable();</script>
    <script src="{{asset('js/plugins/bootstrap-datepicker.min.js')}}"></script>
       <script type="text/javascript">
          $('#demoDate').datepicker({
            format: "dd/mm/yyyy",
            autoclose: true,
            todayHighlight: true
          });
           $('#demoSelect').select2();
      </script>
  </body>
</html>

