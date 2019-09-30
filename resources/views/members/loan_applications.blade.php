@extends('members.default')
@section('page_name') <i class="fa fa-fw fa-dashboard"></i>My Loan Applications @stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title pull-left">Loan Applications</h3>
                    <a href="{{url('/member/apply')}}" class="btn btn-primary btn-sm pull-right"><i class="fa fa-tags"></i> Apply Loan Here
                    </a>
                    <div class="clearfix">&nbsp;</div>
                    <hr>
                    @if(session()->has('error'))
                        <div class="alert alert-danger text-center">
                            <strong>{{session()->get('error')}}</strong>
                        </div>
                    @endif
                    @if(session()->has('success'))
                        <div class="alert alert-success text-center">
                            <strong>{{session()->get('success')}}</strong>
                        </div>
                    @endif
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
{{--                            <th>Member Name</th>--}}
                            <th>Loan Type</th>
                            <th>Principal Amount</th>
                            <th>rate</th>
                            <th>Duration</th>
                            <th>Interest Amount</th>
                            <th>Guarantor</th>
                            <th>Guarantor Approval</th>
                            <th>Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse(\App\Helpers\GeneralHelper::my_loan_applications() as $r)
                            <tr>
                                <td>{{$loop->iteration ?? ''}}</td>
{{--                                <td>{{$r->member->fname ?? ''}} {{$r->member->lname ?? ''}}</td>--}}
                                <td>{{$r->loan_type->name ?? ''}}</td>
                                <td>{{number_format($r->principal_amount) ?? ''}}</td>
                                <td>{{($r->loan_type->interest_rate*100) .'% p.a' ?? ''}}</td>
                                <td>{{$r->interest_period. ' years'?? ''}}</td>
                                <td>{{number_format($r->interest_amount) ?? ''}}</td>
                                <td>{{$r->guarantor->fname ?? ''}} {{$r->guarantor->lname ?? ''}}</td>
                                <td>
                                    @if($r->guarantor_accepted===0)
                                        <button class="btn btn-danger btn-sm">
                                            Not Accepted
                                        </button>
                                    @else
                                        <button class="btn btn-success btn-sm">
                                            Accepted
                                        </button>
                                    @endif
                                </td>
                                <td>
                                    <button class="btn btn-info btn-sm">
                                    {{$r->loan_status->name ?? ''}}</button>

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
