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
                <li><a href="{{url('/my-bookings')}}">My Bookings</a></li>
            </ul>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="text-success text-center text-uppercase">My Bookings</h4>
                    <table class="table table-hover table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Bus</th>
                            <th>Capacity</th>
                            <th>From Date</th>
                            <th>To Date</th>
                            <th>Purpose</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bookings as $booking)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$booking->bus->number_plate ?? ''}}</td>
                                <td>{{$booking->bus->capacity ?? ''}}</td>
                                <td>{{$booking->from_date ?? ''}}</td>
                                <td>{{$booking->to_date ?? ''}}</td>
                                <td>{{$booking->purpose ?? ''}}</td>

                            </tr>

                        @endforeach

                        </tbody>
                    </table>
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
        startDate: "yyyy-mm-dd"
    });
    $('.to_date').datepicker({
        format: "yyyy-mm-dd",
        autoclose: true,
        todayHighlight: true,
        startDate: "yyyy-mm-dd"
    });
</script>

</body>

</html>
