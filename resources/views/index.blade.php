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
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('index')}}">ONLINE MATATU SACCO SYSTEM</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{url('/')}}">Adverts</a></li>
                <li><a href="{{url('/hire')}}">Hire Matatu</a></li>
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
                <li><a href="{{route('index')}}">Advertise</a></li>
            </ul>
        </div>
    </div>
    <div class="card">
        <div class="row card">
            <div class="col-md-4">
                <img src="{{ asset('images/brakes.png') }}" alt="..." class="img-thumbnail" height="20" weight="20">
                <hr>
                <p>This is the original car brakes at an affordable price of ksh.50,000</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/brk.jpg') }}" alt="..." class="img-thumbnail" weight="30" height="20">
                <hr>
                <p>This is the original car brakes at an affordable price of ksh.50,000</p></div>
            <div class="col-md-4">
                <img src="{{ asset('images/rim2.jpg') }}" alt="..." class="img-thumbnail">
                <hr>
                <p>This is the original car rims at an affordable price of ksh.50,000</p></div>
        </div>
        <div class="row card">
            <div class="col-md-4">
                <img src="{{ asset('images/rms.jpg') }}" alt="..." class="img-thumbnail">
                <hr>
                <p>This is the original car brakes at an affordable price of ksh.50,000</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/engin.jpg') }}" alt="..." class="img-thumbnail">
                <hr>
                <p>This is the original car brakes at an affordable price of ksh.30,000</p></div>
            <div class="col-md-4">
                <img src="{{ asset('images/jks.jpg') }}" alt="..." class="img-thumbnail">
                <hr>
                <p>This is the original car brakes at an affordable price of ksh.40,000</p></div>
        </div>
        <div class="row card">
            <div class="col-md-4">
                <img src="{{ asset('images/rim1.png') }}" alt="..." class="img-thumbnail">
                <hr>
                <p>This is the original car wheel at an affordable price of ksh.60,000</p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('images/rim3.jpg') }}" alt="..." class="img-thumbnail">
                <hr>
                <p>This is the original car brakes at an affordable price of ksh.70,000</p></div>
            <div class="col-md-4">
                <img src="{{ asset('images/brk.jpg') }}" alt="..." class="img-thumbnail">
                <hr>
                <p>This is the original car brakes at an affordable price of ksh.50,000</p></div>
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
<script src="{{asset('js/plugins/dataTables.bootstrap.min.js')}}"></script>
<script type="text/javascript">$('#sampleTable').DataTable();</script>
</body>
</html>
