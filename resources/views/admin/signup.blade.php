<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ONLINE CO-OPERATIVE SOCIETY SYSTEM</title>
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
</head>

<body>
<section class="material-half-bg">
    <div class="cover"></div>
</section>
<section class="login-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="card">
                    <h3 class="card-title text-success text-center">System administrator signup.</h3>
                    <hr>
                    <div class="card-body">
                        @if(session()->has('error'))
                            <div class="alert alert-danger text-center">
                                <strong>{{session()->get('danger')}}</strong>
                            </div>
                        @endif
                        @if(session()->has('success'))
                            <div class="alert alert-success text-center">
                                <strong>{{session()->get('success')}}</strong>
                            </div>
                        @endif
                        <form role="form" method="POST" action="{{url('/admin')}}">
                            @csrf
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                        <input class="form-control" placeholder="Full Name" name="name" type="text"
                                               value="{{old('name')}}" autofocus>
                                        @if ($errors->has('name'))
                                            <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                        <input class="form-control" placeholder="E-mail" name="email" type="email"
                                               autofocus value="{{old('email')}}">
                                        @if ($errors->has('email'))
                                            <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div><!--end row-->
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group  {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <input class="form-control" placeholder="Password" name="password"
                                               type="password">
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group  {{ $errors->has('password') ? ' has-error' : '' }}">
                                        <input class="form-control" placeholder="Password confirmation"
                                               name="password_confirmation" type="password">
                                        @if ($errors->has('password'))
                                            <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                                        @endif
                                    </div>
                                </div>
                            </div><!--end row-->
                            <div class="card-footer">
                                <div class="row">
                                    <div class="col-md-8 col-md-offset-2">
                                        <button class="btn btn-success icon-btn btn-block" type="submit"><i
                                                class="fa fa-fw fa-lg fa-check-circle"></i>Create Account
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>

                    <div class="card-footer">
                        <div class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <a class="btn btn-default icon-btn btn-block" href="{{url('/')}}"><i
                                        class="fa fa-fw fa-lg fa-arrow-left"></i>Back Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- jQuery -->
<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
</body>

</html>
