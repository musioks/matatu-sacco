@extends('admin.template')
@section('page_name') <i class="fa fa-fw fa-list"></i> Booking Details @stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{url('/admin/bookings')}}" class="btn btn-info">Go Back</a>
                    <form role="form">
                        <h5>Vehicle : {{$booking->bus->number_plate ?? ''}} Capacity: {{$booking->bus->capacity ?? ''}} </h5>
                        <hr>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="reg_no">Name</label>
                                    <input class="form-control" id="reg_no"
                                           name="name"
                                           type="text"
                                           value="{{$booking->name}}" disabled>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="model">Email Address</label>
                                    <input class="form-control" id="model"
                                           type="email"
                                           value="{{$booking->email}}" disabled>
                                </div>
                            </div>
                        </div><!--end row-->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="capacity">Phone No.</label>
                                    <input class="form-control" id="capacity"
                                           name="phone"
                                           type="text"
                                           value="{{$booking->phone ?? ''}}" disabled>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="photo">Purpose</label>
                                    <textarea class="form-control" id="photo" name="purpose"
                                              placeholder="..Purpose for hire" disabled>
                                        {{$booking->purpose ?? ''}}
                                    </textarea>
                                </div>
                            </div>
                        </div><!--end row-->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="from_date">Hire From</label>
                                    <input class="form-control from_date" id="from_date"
                                           name="from_date"
                                           type="text"
                                           value="{{$booking->from_date ?? ''}}" disabled>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="to_date">Hire To</label>
                                    <input class="form-control to_date" id="to_date"
                                           name="to_date"
                                           type="text"
                                           value="{{$booking->to_date ?? ''}}" disabled>
                                </div>
                            </div>
                        </div><!--end row-->

                    </form>

                </div>
            </div>
        </div>
    </div>

@stop
