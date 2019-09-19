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
@include('front-end.nav')

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
                <li><a href="{{route('complains')}}">Complains</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title text-center">Launch Complain Here</h4>
                    <form action="{{ route('complain.create') }}" method="post" novalidate=""
                          enctype="multipart/form-data">
                        {{csrf_field()}}
                        <div class="form-group {{$errors->has('name') ? 'has-error' : ''}}">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" value="{{old('name')}}" id="name" name="name"
                                   placeholder="Your Name">
                            @if($errors->has('name'))
                                <span class="help-block"><strong>{{$errors->first('name')}}</strong></span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                            <label for="email">Email address</label>
                            <input type="email" class="form-control" name="email" value="{{old('email')}}" id="email"
                                   placeholder="Email">
                        </div>
                        @if($errors->has('email'))
                            <span class="help-block"><strong>{{$errors->first('email')}}</strong></span>
                        @endif
                        <div class="form-group {{$errors->has('phone') ? 'has-error' : ''}}">
                            <label for="phone">Phone</label>
                            <input type="number" class="form-control" value="{{old('phone')}}" id="phone" name="phone"
                                   placeholder="phone number">
                            @if($errors->has('phone'))
                                <span class="help-block"><strong>{{$errors->first('phone')}}</strong></span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('pic') ? 'has-error' : ''}}">
                            <label for="pic">Image</label>
                            <input type="file" id="pic" name="pic">
                            <p class="help-block">Image of the matatu or the conductor</p>
                            @if($errors->has('pic'))
                                <span class="help-block"><strong>{{$errors->first('pic')}}</strong></span>
                            @endif
                        </div>
                        <div class="form-group {{$errors->has('description') ? 'has-error' :''}}">
                            <label for="phone">Description</label>
                            <textarea name="description" cols="30" rows="5" class="form-control"></textarea>
                            @if($errors->has('description'))
                                <span class="help-block"><strong>{{$errors->first('description')}}</strong></span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                    </form>
                </div>
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
