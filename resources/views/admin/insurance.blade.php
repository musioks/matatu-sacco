@extends('admin.template')
@section('page_name') <i class="fa fa-fw fa-user"></i>Member Insurance @stop
@section('content')
    <button type="button" class="btn btn-lg btn-info" data-toggle="modal" data-target="#myModal">ADD INSURANCE</button>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Date added</th>
                            <th>Amount</th>
                        </tr>
                        </thead>
                        <tbody>
                        @if(!empty($insurances))
                            @foreach($insurances as $insurance)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$insurance->member->full_name}}</td>
                                    <td>{{date('F d, Y', strtotime($insurance->date_added))}}</td>
                                    <td>{{number_format($insurance->amount)}}</td>

                                </tr>
                            @endforeach
                        @endif

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal approve-->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Add Insurance</h4>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/postInsurance') }}" method="post" data-parsley-validate="">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="status">Select member</label>
                            <select class="form-control" name="member_id" id="status" required="">
                                <option value="">-------select option--------</option>
                                @foreach($users as $user)
                                    <option value="{{$user->id}}">{{$user->full_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Amount</label>
                            <input type="number" name="amount" id="exampleInputPassword1" class="form-control" required=""
                                   placeholder="Enter Amount">
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
