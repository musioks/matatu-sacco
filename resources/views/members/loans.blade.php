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
                                <th>Principal Amount</th>
                                <th>Interest</th>
                                <th>Interest Period</th>
                                <th>Guarantor</th>
                                <th>Guarantor Approval</th>
                                <th>Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse(\App\Helpers\GeneralHelper::my_loans() as $r)
                                <tr>
                                    <td>{{$loop->iteration ?? ''}}</td>
{{--                                    <td>{{$r->member->fname ?? ''}} {{$r->member->lname ?? ''}}</td>--}}
                                    <td>{{$r->loan_type->name ?? ''}}</td>
                                    <td>{{number_format($r->principal_amount) ?? ''}}</td>
                                    <td>{{($r->loan_type->interest)*100 ?? ''}}</td>
                                    <td>{{$r->interest_period ?? ''}}</td>
                                    <td>{{$r->guarantor->fname ?? ''}} {{$r->guarantor->lname ?? ''}}</td>
                                    <td>
                                        @if($r->guarantor_accepted===0)
                                            <button class="btn btn-danger btn-sm">
                                                Not Accepted</button>
                                        @else
                                            <button class="btn btn-success btn-sm">
                                                Accepted</button>
                                        @endif
                                    </td>
                                    <td>
                                        <button class="btn btn-info btn-sm">
                                            Loan {{$r->loan_status->name ?? ''}}</button>

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


@stop
