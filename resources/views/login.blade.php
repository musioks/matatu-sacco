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
        <div class="col-sm-9">
            <div class="card clearfix">
                <div class="card-body">
                    <!-- start bus row -->
                    <h3 class="text-success text-center text-uppercase">Buses for Hire</h3>
                    <hr>
                    <div class="row">
                        @foreach($buses as $bus)
                            <div class="col-sm-6">
                                <div class="thumbnail">
                                    <img src="{{asset('/buses/'.$bus->bus_photo)}}" width="300" height="200"
                                         alt="{{$bus->number_plate ?? ''}}">
                                    <div class="caption">
                                        <h3>Registration No : {{$bus->number_plate ?? ''}} </h3>
                                        <hr>
                                        <h5> Model : {{$bus->model ?? ''}} <em class="pull-right text-warning">Capacity
                                                : {{$bus->capacity ?? ''}}  </em></h5>
                                        <hr>
                                        Amount Per Day: <span
                                            class="label label-success"> Kshs.{{number_format($bus->booking_amount)}}</span>
                                        <p> {{$bus->description ?? ''}}</p>
                                        <button class="btn btn-info" data-toggle="modal"
                                                data-target="#hireBus-{{$bus->id}}">Hire
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="hireBus-{{$bus->id}}" tabindex="-1" role="dialog"
                                 aria-labelledby="myModalLabel">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                                    aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel">Hire Bus </h4>
                                        </div>
                                        <div class="modal-body">
                                            <form role="form" method="POST" action="{{url('/hire-bus')}}">
                                                @csrf
                                                <input type="hidden" name="bus_id" value="{{$bus->id}}">
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="reg_no">Name</label>
                                                            <input class="form-control" id="reg_no"
                                                                   placeholder="Your Name"
                                                                   name="name"
                                                                   type="text"
                                                                   value="{{old('name')}}" required autofocus>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="model">Email Address</label>
                                                            <input class="form-control" id="model"
                                                                   placeholder="Your Email Address" name="email"
                                                                   type="email"
                                                                   value="{{old('email')}}" required autofocus>
                                                        </div>
                                                    </div>
                                                </div><!--end row-->
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="capacity">Phone No.</label>
                                                            <input class="form-control" id="capacity"
                                                                   placeholder="eg. 0701541888"
                                                                   name="phone"
                                                                   type="text"
                                                                   value="{{old('phone')}}" required autofocus>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="photo">Purpose</label>
                                                            <textarea class="form-control" id="photo" name="purpose"
                                                                      placeholder="..Purpose for hire" required></textarea>
                                                        </div>
                                                    </div>
                                                </div><!--end row-->
                                                <div class="row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="from_date">Hire From</label>
                                                            <input class="form-control from_date" id="from_date"
                                                                   placeholder="Hire from date eg. 2019-11-20"
                                                                   name="from_date"
                                                                   type="text"
                                                                   value="{{old('from_date')}}" required autofocus>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <label for="to_date">Hire To</label>
                                                            <input class="form-control to_date" id="to_date"
                                                                   placeholder="Hire to date eg. 2019-11-22"
                                                                   name="to_date"
                                                                   type="text"
                                                                   value="{{old('to_date')}}" required autofocus>
                                                        </div>
                                                    </div>
                                                </div><!--end row-->
                                                <div class="card-footer">
                                                    <div class="row">
                                                        <div class="col-md-8 col-md-offset-2">
                                                            <button class="btn btn-success icon-btn btn-block" type="submit"><i
                                                                    class="fa fa-fw fa-lg fa-check-circle"></i>Submit
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end modal -->
                        @endforeach

                    </div>

                    <!-- end bus row -->
                    <hr>
                    {{ $buses->links() }}
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card">
                <div class="card-body">
                    <form class="login-form" method="POST" action="{{url('/login')}}">
                        @csrf
                        <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
                        <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                            <label class="control-label" for="email">USERNAME</label>
                            <input class="form-control" id="email" type="text" placeholder="Email" name="email"
                                   autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                            @endif
                        </div>
                        <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                            <label class="control-label" for="password">PASSWORD</label>
                            <input class="form-control" type="password" id="password" placeholder="Password"
                                   name="password">
                            @if ($errors->has('password'))
                                <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                            @endif
                        </div>

                        <div class="form-group btn-container" style="padding: 5px;">
                            <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN
                            </button>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end section-->


<!-- jQuery -->
<script src="{{asset('js/jquery-2.1.4.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/plugins/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
@include('sweetalert::alert')
<script>
    $('.from_date').datepicker({
        format: "yyyy-mm-dd",
        autoclose: true,
        todayHighlight: true,
        startDate:"yyyy-mm-dd"
    });
    $('.to_date').datepicker({
        format: "yyyy-mm-dd",
        autoclose: true,
        todayHighlight: true,
        startDate:"yyyy-mm-dd"
    });
</script>

</body>

</html>
