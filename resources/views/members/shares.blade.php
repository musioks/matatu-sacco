@extends('members.default')
@section('page_name') <i class="fa fa-fw fa-dashboard"></i>My Share @stop
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
                                    <h4 class="modal-title" id="myModalLabel">Add Share </h4>
                                </div>
                                <div class="modal-body">
                                    <form role="form" method="POST" action="{{url('/member/shares')}}"
                                          enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="reg_no">Amount</label>
                                            <input class="form-control" id="reg_no"
                                                   placeholder="Enter Amount"
                                                   name="amount"
                                                   type="number" min="1"
                                                   value="{{old('amount')}}" required autofocus>
                                        </div>
                                        <input name="date_added" type="hidden" value="{{\Carbon\Carbon::now()}}">
                                        <input name="member_id" type="hidden" value="{{\App\Helpers\GeneralHelper::member()->id}}">
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
                    <h3 class="card-title">My Share
                        <button class="btn btn-primary pull-right" data-toggle="modal" data-target="#add-Admin"><i
                                class="fa fa-plus"></i> Add Share
                        </button>
                    </h3>
                    <table class="table table-hover table-bordered table-condensed">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Amount Paid (KES)</th>
                            <th>Date Paid</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse(\App\Helpers\GeneralHelper::shares() as $r)
                            <tr>
                                <td>{{$loop->iteration ?? ''}}</td>
                                <td>{{number_format($r->amount) ?? ''}}</td>
                                <td>{{$r->date_added ?? ''}}</td>

                            </tr>
                        @empty
                            {{""}}

                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


@stop
