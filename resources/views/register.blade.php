<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">

<title>ONLINE MATATU SACCO SYSTEM </title>

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
    <h3 class="card-title text-success text-center">Sign up to be a Member.</h3>
    <hr>
    <div class="card-body">
@if(Session::has('error'))
<div class="alert alert-danger text-center">
<strong>{{Session::get('danger')}}</strong>
</div>
@endif
@if(Session::has('success'))
<div class="alert alert-success text-center">
<strong>{{Session::get('success')}}</strong>
</div>
@endif
       <form role="form" method="POST" action="{{url('/register')}}">
              {{ csrf_field() }}
<div class="row">
<div class="col-sm-6">
                    <div class="form-group {{ $errors->has('fname') ? ' has-error' : '' }}">
       <input class="form-control" placeholder="First Name" name="fname" type="text" value="{{old('fname')}}" autofocus>
                            @if ($errors->has('fname'))
          <span class="help-block">
              <strong>{{ $errors->first('fname') }}</strong>
          </span>
      @endif
                      </div>
                      </div>
                      <div class="col-sm-6">
                      <div class="form-group {{ $errors->has('lname') ? ' has-error' : '' }}">
        <input class="form-control" placeholder="Last Name" name="lname" type="text" value="{{old('lname')}}" autofocus>
                            @if ($errors->has('lname'))
          <span class="help-block">
              <strong>{{ $errors->first('lname') }}</strong>
          </span>
      @endif
                      </div>
                      </div>
                      </div><!--end row-->
 <div class="row">
<div class="col-sm-6">
                      <div class="form-group {{ $errors->has('nid') ? ' has-error' : '' }}">
       <input class="form-control" placeholder="National ID" name="nid" type="number" value="{{old('nid')}}" autofocus>
                            @if ($errors->has('nid'))
          <span class="help-block">
              <strong>{{ $errors->first('nid') }}</strong>
          </span>
      @endif
                      </div>
                      </div>
                        <div class="col-sm-6">
       <div class="form-group {{ $errors->has('dob') ? ' has-error' : '' }}">
       <input class="form-control" placeholder="Date of Birth" name="dob" id="demoDate" type="text" autofocus>
                            @if ($errors->has('dob'))
          <span class="help-block">
              <strong>{{ $errors->first('dob') }}</strong>
          </span>
      @endif
                      </div>
                      </div>
                      </div><!--end row-->
    <div class="row">
<div class="col-sm-6">
                         <div class="form-group {{ $errors->has('phone') ? ' has-error' : '' }}">
       <input class="form-control" placeholder="Phone No." name="phone" type="text" value="{{old('phone')}}" autofocus>
                            @if ($errors->has('phone'))
          <span class="help-block">
              <strong>{{ $errors->first('phone') }}</strong>
          </span>
      @endif
                      </div>
                      </div>
                      <div class="col-sm-6">
                      <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
   <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus value="{{old('email')}}">
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
       <div class="form-group {{ $errors->has('residence') ? ' has-error' : '' }}">
       <input class="form-control" placeholder="Where do you stay?" name="residence" type="text" value="{{old('residence')}}" autofocus>
                            @if ($errors->has('residence'))
          <span class="help-block">
              <strong>{{ $errors->first('residence') }}</strong>
          </span>
      @endif
                      </div>
                      </div>
        <div class="col-sm-6">
      <div class="form-group {{ $errors->has('nok') ? ' has-error' : '' }}">
       <input class="form-control" placeholder="Next of Kin" name="nok" type="text" value="{{old('nok')}}" autofocus>
                            @if ($errors->has('nok'))
          <span class="help-block">
              <strong>{{ $errors->first('nok') }}</strong>
          </span>
      @endif
                      </div>
                      </div>
                      </div><!--end row-->
 <div class="row">
 <div class="col-sm-6">
      <div class="form-group {{ $errors->has('relationship') ? ' has-error' : '' }}">
       <select class="form-control" value="{{old('relationship')}}" name="relationship" id="demoSelect">
       <option value=""> --How are you related to the kin above?--</option>
       <option value="Wife">Wife</option>
       <option value="Husband">Husband</option>
       <option value="Son">Son</option>
       <option value="Daughter">Daughter</option>
       <option value="Father">Father</option>
       <option value="Mothet">Mother</option>
       </select>
                            @if ($errors->has('relationship'))
          <span class="help-block">
              <strong>{{ $errors->first('relationship') }}</strong>
          </span>
      @endif
                      </div>
                      </div>
<div class="col-sm-6">

                      </div>
     
                      </div><!--end row-->
<div class="row">
 <div class="col-sm-6">
                       <div class="form-group  {{ $errors->has('password') ? ' has-error' : '' }}">
  <input class="form-control" placeholder="Password" name="password" type="password" > 
                                             @if ($errors->has('password'))
          <span class="help-block">
              <strong>{{ $errors->first('password') }}</strong>
          </span>
      @endif
                      </div>
                      </div>
                      <div class="col-sm-6">
                       <div class="form-group  {{ $errors->has('password') ? ' has-error' : '' }}">
                          <input class="form-control" placeholder="Password confirmation" name="password_confirmation" type="password"> 
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
          <button class="btn btn-primary icon-btn btn-block" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Create Account</button>
        </div>
      </div>
    </div>
              </form>

            
      </div>
     
      <div class="card-footer">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
         <a class="btn btn-warning icon-btn btn-block" href="{{route('index')}}"><i class="fa fa-fw fa-lg fa-arrow-left"></i>Back Home</a>
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
<script src="{{asset('js/plugins/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('js/plugins/select2.min.js')}}"></script>
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
