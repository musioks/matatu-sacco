@extends('members.default')
@section('page_name') <i class="fa fa-fw fa-dashboard"></i>My Approved Loans @stop
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                        <h3 class="card-title">My Approved Loans</h3>
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
{{--                                <th>Member Name</th>--}}
                                <th>Loan Type</th>
                                <th>Principal Amount (KES)</th>
                                <th>Interest</th>
                                <th>Interest Period</th>
                                <th class="text-success">Monthly Installment(KES)</th>
                                <th>Last Paid Amount(KES)</th>
                                <th>Last Payment Date</th>
                                <th>Next Payment Date</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse(\App\Helpers\GeneralHelper::my_loans() as $r)
                                <tr>
                                    <td>{{$loop->iteration ?? ''}}</td>
{{--                                    <td>{{$r->member->fname ?? ''}} {{$r->member->lname ?? ''}}</td>--}}
                                    <td>{{$r->loan_application->loan_type->name ?? ''}}</td>
                                    <td>{{number_format($r->loan_application->principal_amount) ?? ''}}</td>
                                    <td>{{($r->loan_application->loan_type->interest_rate)*100 ?? ''}}</td>
                                    <td>{{$r->loan_application->interest_period ?? ''}}</td>
                                    <td>{{$r->loan_application->monthly_installment ?? ''}}</td>
                                    <td>{{$r->amount_paid ?? ''}}</td>
                                    <td>{{$r->repayment_date ?? ''}}</td>
                                    <td>{{$r->next_repayment_date ?? ''}}</td>

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
