<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ONLINE MATATU SACCO SYSTEM</title>
    <!-- Bootstrap Core CSS -->
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">

</head>

<body>
@include('front-end.nav')
{{--<section class="material-half-bg">--}}
{{--    <div class="cover"></div>--}}
{{--</section>--}}
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
                <li><a href="{{url('/')}}">Home</a></li>
            </ul>
        </div>
    </div>
<div class="row">
    {{--    <div class="logo">--}}
    {{--        <h2><a href="{{url('/')}}" style="color:#FFF;font-style: normal; font-family: sans-serif;">ONLINE MATATU--}}
    {{--                SACCO SYSTEM</a></h2>--}}
    {{--    </div>--}}
    <div class="card col-sm-4 col-sm-offset-4">
        <div class="card-body">
            <form class="login-form" method="POST" action="{{url('/login')}}">
                @csrf
                <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
                @if(session()->has('error'))
                    <div class="alert alert-danger text-center">
                        <strong>{{session()->get('error')}}</strong>
                    </div>
                @endif
                @if(session()->has('success'))
                    <div class="alert alert-success text-center">
                        <strong>{{session()->get('success')}}</strong>
                    </div>
                @endif
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="control-label">USERNAME</label>
                    <input class="form-control" type="text" placeholder="Email" name="email" autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="control-label">PASSWORD</label>
                    <input class="form-control" type="password" placeholder="Password" name="password">
                    @if ($errors->has('password'))
                        <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                </div>

                <div class="form-group btn-container" style="padding: 5px;">
                    <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
                </div>


            </form>
        </div>
    </div>
</div>
</div>

<!-- end section-->


<!-- jQuery -->
<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>


</body>

</html>
