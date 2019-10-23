@extends('admin.template')
@section('page_name') <i class="fa fa-fw fa-cab"></i> Display details for {{$bus->number_plate ?? ''}} @stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{url('/admin/buses')}}" class="btn btn-info">Go Back</a>
                    <form role="form" method="POST" action="{{url('/admin/buses/'.$bus->id.'/update')}}"
                          enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6 col-sm-offset-3">
                                <div class="form-group">
                                    <img src="{{asset('/buses/'.$bus->bus_photo)}}" alt="{{$bus->number_plate ?? ''}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="reg_no">Registration No.</label>
                                    <input class="form-control" id="reg_no"
                                           name="number_plate"
                                           type="text"
                                           value="{{$bus->number_plate ?? ''}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="model">Model</label>
                                    <input class="form-control" id="model"
                                           name="model"
                                           type="text"
                                           value="{{$bus->model ?? ''}}">
                                </div>
                            </div>
                        </div><!--end row-->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="capacity">Vehicle Capacity</label>
                                    <input class="form-control" id="capacity"
                                           name="capacity"
                                           type="number"
                                           value="{{$bus->capacity ?? ''}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="amount">Hire Amount(KES)</label>
                                    <input class="form-control" id="amount"
                                           name="booking_amount"
                                           type="number"
                                           value="{{$bus->booking_amount ?? ''}}">
                                </div>
                            </div>
                        </div><!--end row-->
                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <input class="form-control" id="photo"
                                   name="bus_photo"
                                   value="{{$bus->bus_photo ?? ''}}"
                                   type="file">
                        </div>
                        <div class="form-group">
                            <label for="photo">Description</label>
                            <textarea class="form-control" id="photo"
                                      name="description">
                                {{$bus->description ?? ''}}
                                            </textarea>
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <button class="btn btn-success icon-btn btn-block" type="submit"><i
                                            class="fa fa-fw fa-lg fa-refresh"></i> Update
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

@stop
