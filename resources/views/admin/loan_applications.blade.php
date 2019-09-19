@extends('admin.template')
@section('page_name') <i class="fa fa-fw fa-pencil-square-o"></i>All Loan Applications @stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover" id="sampleTable">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Member Name</th>
                                <th>Loan Type</th>
                                <th>Principal Amount</th>
                                <th>rate</th>
                                <th>Duration</th>
                                <th>Interest Amount</th>
                                <th>Guarantor</th>
                                <th>Guarantor Approval</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse(\App\Helpers\LeaveHelper::all_applications() as $r)
                                <tr>
                                    <td>{{$loop->iteration ?? ''}}</td>
                                    <td>{{$r->member->full_name ?? ''}}</td>
                                    <td>{{$r->loan_type->name ?? ''}}</td>
                                    <td>{{number_format($r->principal_amount) ?? ''}}</td>
                                    <td>{{($r->loan_type->interest_rate*100) .'% p.a' ?? ''}}</td>
                                    <td>{{$r->interest_period. ' years'?? ''}}</td>
                                    <td>{{number_format($r->interest_amount) ?? ''}}</td>
                                    <td>{{$r->guarantor->fname ?? ''}} {{$r->guarantor->lname ?? ''}}</td>
                                    <td>
                                        @if($r->guarantor_accepted===0)
                                            <span class="label label-danger">
                                            Not Accepted
                                            </span>
                                        @else
                                            <span class="label label-success">
                                            Accepted
                                            </span>
                                        @endif
                                    </td>
                                    <td>
                                               <span class="label label-info">
                                           {{$r->loan_status->name ?? ''}}
                                            </span>

                                    </td>
                                    <td>
                                        @if(($r->guarantor_accepted===0) &&
                                         ($r->loan_status_id===\App\Helpers\LoanStatus::pending()->id ||$r->loan_status_id===\App\Helpers\LoanStatus::initiated()->id) )
                                            <button class="btn btn-danger btn-xs" data-toggle="modal"
                                                    data-target="#rejectModal-{{$r->id}}">Reject
                                            </button>
                                            @elseif(($r->guarantor_accepted===1) &&
                                         ($r->loan_status_id===\App\Helpers\LoanStatus::pending()->id ||$r->loan_status_id===\App\Helpers\LoanStatus::initiated()->id) )
                                            <button class="btn btn-danger btn-xs" data-toggle="modal"
                                                    data-target="#rejectModal-{{$r->id}}">Reject
                                            </button>
                                            <button class="btn btn-success btn-xs" data-toggle="modal"
                                                    data-target="#approveModal-{{$r->id}}">Approve
                                            </button>
                                            @else
                                            {{$r->loan_status->name ?? ''}}
                                            @endif
                                    </td>
                                    <!-- approval modal -->
                                    <div class="modal fade" id="approveModal-{{$r->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Approve Application</h4>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to approve this loan application ?
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="{{url('/admin/loan-application/'.$r->id.'/approve')}}" class="btn btn-success"><i class="fa fa-check"></i> OKay</a>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>Cancel</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end approval modal -->
                                    <!-- reject modal -->
                                    <div class="modal fade" id="rejectModal-{{$r->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                                    <h4 class="modal-title" id="myModalLabel">Reject Loan Application</h4>
                                                </div>
                                                <div class="modal-body">
                                                    Are you sure you want to reject this loan application ?
                                                </div>
                                                <div class="modal-footer">
                                                    <a href="{{url('/admin/loan-application/'.$r->id.'/reject')}}" class="btn btn-success"><i class="fa fa-check"></i> OKay</a>
                                                    <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>Cancel</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end reject modal -->
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
    </div>

@stop
