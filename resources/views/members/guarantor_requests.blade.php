@extends('members.default')
@section('page_name') <i class="fa fa-fw fa-dashboard"></i>My Guarantor Requests @stop
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                        <h3 class="card-title">Guarantor Requests</h3>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Member Name</th>
                                <th>Loan Type</th>
                                <th>Loan Amount</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse(\App\Helpers\GeneralHelper::my_guarantor_requests() as $r)
                                <tr>
                                    <td>{{$loop->iteration ?? ''}}</td>
                                    <td>{{$r->member->fname ?? ''}} {{$r->member->lname ?? ''}}</td>
                                    <td>{{$r->loan_type->name ?? ''}}</td>
                                    <td>{{number_format($r->principal_amount) ?? ''}}</td>
                                    <td>
                                        @if($r->loan_status_id=== \App\Helpers\LoanStatus::approved()->id || $r->loan_status_id===\App\Helpers\LoanStatus::rejected()->id)
                                            <button class="btn btn-info btn-sm">
                                                Loan {{$r->loan_status->name ?? ''}}</button>
                                        @else
                                            @if($r->guarantor_accepted===0)
                                                <button class="btn btn-primary btn-sm" data-toggle="modal"
                                                        data-target="#approveModal-{{$r->id}}">Approve Request
                                                </button>
                                            @else
                                                <button class="btn btn-success btn-sm">Request Accepted</button>
                                            @endif
                                        @endif
                                    </td>
                                    <div class="modal fade" id="approveModal-{{$r->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Approve Guarantor Request</h4>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to approve this request ?
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="{{url('/member/loan-application/'.$r->id.'/approve')}}" class="btn btn-success"><i class="fa fa-check"></i> OKay</a>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>Cancel</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
