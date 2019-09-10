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
<section class="material-half-bg">
    <div class="cover"></div>
</section>
<section class="login-content">
    <div class="logo">
        <h2><a href="{{route('index')}}" style="color:#FFF;font-style: normal; font-family: sans-serif;">ONLINE MATATU
                SACCO SYSTEM</a></h2>
    </div>
    <div class="login-box">

        <form class="login-form" method="POST" action="{{url('/login')}}">
            {{ csrf_field() }}

            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
            @if(Session::has('error'))
                <div class="alert alert-danger text-center">
                    <strong>{{Session::get('error')}}</strong>
                </div>
            @endif
            @if(Session::has('success'))
                <div class="alert alert-success text-center">
                    <strong>{{Session::get('success')}}</strong>
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

            <div class="form-group btn-container">
                <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
            </div>


        </form>
    </div>

    <div class="btn-container">
        <a class="btn btn-default btn-block" href="{{route('index')}}"><i class="fa fa-fw fa-lg fa-arrow-left"></i>Back
            Home</a>

    </div>
</section>

<!-- end section-->


<!-- jQuery -->
<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>


</body>

</html>
