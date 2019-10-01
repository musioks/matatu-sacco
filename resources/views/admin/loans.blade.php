@extends('admin.template')
@section('page_name') <i class="fa fa-fw fa-pencil-square-o"></i>All Loan Applications @stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{url('/admin/loans/print')}}" class="btn btn-primary pull-right"><i class="fa fa-fw fa-file-pdf-o"></i>Print</a>
            <h4 class="clearfix">&nbsp;</h4>
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
                                <th>Status</th>
{{--                                <th>Action</th>--}}
                            </tr>
                            </thead>
                            <tbody>
                            @forelse(\App\Helpers\LeaveHelper::all_loans() as $r)
                                <tr>
                                    <td>{{$loop->iteration ?? ''}}</td>
                                    <td>{{$r->loan_application->member->full_name ?? ''}}</td>
                                    <td>{{$r->loan_application->loan_type->name ?? ''}}</td>
                                    <td>{{number_format($r->loan_application->principal_amount) ?? ''}}</td>
                                    <td>{{($r->loan_application->loan_type->interest_rate*100) .'% p.a' ?? ''}}</td>
                                    <td>{{$r->loan_application->interest_period. ' years'?? ''}}</td>
                                    <td>{{number_format($r->loan_application->interest_amount) ?? ''}}</td>
                                    <td>{{$r->loan_application->guarantor->full_name ?? ''}}</td>
                                    <td>
                                               <span class="label label-info">
                                           {{$r->loan_status->name ?? ''}}
                                            </span>

                                    </td>


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
