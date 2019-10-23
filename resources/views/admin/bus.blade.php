@extends('admin.template')
@section('page_name') <i class="fa fa-fw fa-cab"></i> List of all Buses @stop
@section('styles')
    <style>
        #sampleTable th, td {
            font-size: 1.2em;
        }
    </style>
@stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <!-- Modal -->
                    <div class="modal fade" id="add-Admin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Add Bus </h4>
                                </div>
                                <div class="modal-body">
                                    <form role="form" method="POST" action="{{url('/admin/buses')}}"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="reg_no">Registration No.</label>
                                                    <input class="form-control" id="reg_no"
                                                           placeholder="Registration No. eg. KCT100Y"
                                                           name="number_plate"
                                                           type="text"
                                                           value="{{old('number_plate')}}" required autofocus>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="model">Model</label>
                                                    <input class="form-control" id="model"
                                                           placeholder="Vehicle Model eg. Toyota Vitz" name="model"
                                                           type="text"
                                                           value="{{old('model')}}" required autofocus>
                                                </div>
                                            </div>
                                        </div><!--end row-->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="capacity">Vehicle Capacity</label>
                                                    <input class="form-control" id="capacity"
                                                           placeholder="eg. 35"
                                                           name="capacity"
                                                           type="number"
                                                           value="{{old('capacity')}}" required autofocus>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="amount">Hire Amount(KES)</label>
                                                    <input class="form-control" id="amount"
                                                           placeholder="Amount per day" name="booking_amount"
                                                           type="number"
                                                           value="{{old('booking_amount')}}" required autofocus>
                                                </div>
                                            </div>
                                        </div><!--end row-->
                                        <div class="form-group">
                                            <label for="photo">Photo</label>
                                            <input class="form-control" id="photo"
                                                   name="bus_photo"
                                                   type="file" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="photo">Description</label>
                                            <textarea class="form-control" id="photo"
                                                   name="description"
                                                      placeholder="..Give more Details"
                                                    required>
                                            </textarea>
                                        </div>
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
                    <div class="pull-right">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#add-Admin"><i
                                class="fa fa-plus"></i> Add Bus
                        </button>
                    </div>
                    <h6 class="clearfix">&nbsp;</h6>
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Registration No.</th>
                            <th>Model</th>
                            <th>Capacity</th>
                            <th>Hire Amount (KES)</th>
                            <th>Description</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($buses as $row)
                            <tr>
                                <td>{{$loop->iteration ?? ''}}</td>
                                <td>{{$row->number_plate ?? ''}}</td>
                                <td>{{$row->model ?? ''}}</td>
                                <td>{{$row->capacity ?? ''}}</td>
                                <td>{{number_format($row->booking_amount) ?? ''}}</td>
                                <td>{!!  $row->description ?? ''!!}</td>
                                <td>
                                    <button class="btn btn-danger btn-sm" data-toggle="modal" data-target="#delete-Bus-{{$row->id}}"><i
                                            class="fa fa-times"></i>
                                    </button>
                                    <a href="{{url('/admin/buses/'.$row->id.'/view')}}" class="btn btn-sm btn-success" >View</a>
                                </td>
                                <!-- ====================Delete Modal===========================  -->
                                <div id="delete-Bus-{{ $row->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <h5>Are you sure you want to delete this vehicle?</h5>
                                            </div>
                                            <div class="modal-footer clearfix">
                                                <a href="{{ url('/admin/buses/'.$row->id.'/delete') }}" class="btn btn-success pull-left">Okay</a>
                                                <button type="button" class="btn btn-danger pull-right" data-dismiss="modal">Cancel</button>
                                            </div>
                                        </div>
                                    </div><!-- /.modal-dialog -->
                                </div><!-- /.modal -->
                                <!-- ====================End Delete Modal===========================  -->
                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop
