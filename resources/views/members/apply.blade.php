@extends('members.default')
@section('page_name') <i class="fa fa-fw fa-dashboard"></i>Apply Loan @stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title pull-left">Apply Loan</h3>
                    <a href="{{url('member/loan-applications')}}" class="btn btn-warning btn-sm pull-right"> {{'<<'}} Go
                        to Applications
                    </a>

                    <div class="clearfix">&nbsp;</div>
                    <hr>
                    <form class="form-horizontal" method="post" action="{{ url('member/apply') }}">
                        @csrf
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
                        <input type="hidden" name="member_id" value="{{\App\Helpers\GeneralHelper::member()->id}}">
                        <input type="hidden" name="loan_status_id" value="{{\App\Helpers\LoanStatus::initiated()->id}}">
                        <input type="hidden" name="" value="{{\App\Helpers\LoanStatus::initiated()->id}}">
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="loan_type"> Loan Type</label>
                            <div class="col-lg-10">
                                <select class="form-control" id="loan_type" name="loan_type_id" required>
                                    <option value="">--Select type---</option>
                                    @forelse($loan_types as $type)
                                        <option value="{{$type->id}}">{{$type->name}}</option>
                                    @empty
                                        <option value="">No Data</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="interest">Loan Interest</label>
                            <div class="col-lg-10">
                                <input class="form-control" id="interest" type="text" disabled>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-lg-2 control-label" for="interest_period">Interest Period</label>
                            <div class="col-lg-10">
                                <input class="form-control" id="interest_period" min="0" type="number" name="interest_period"
                                       placeholder="period in years" required>
                            </div>
                        </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label" for="amount">Principal Amount</label>
                                <div class="col-lg-10">
                                    <input class="form-control" id="amount" type="number" name="principal_amount"
                                           placeholder="Enter Amount" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-2 control-label" for="select"> Request Guarantor</label>
                                <div class="col-lg-10">
                                    <select class="form-control" id="select" name="guarantor_id" required>
                                        <option value="">--select guarantor---</option>
                                        @forelse(\App\Helpers\GeneralHelper::guarantors() as $user)
                                            <option value="{{$user->id}}">{{$user->full_name}}</option>
                                        @empty
                                            <option value="">No Data</option>
                                        @endforelse
                                    </select>
                                </div>
                            </div>
{{--                            <div class="form-group {{ $errors->has('due') ? ' has-error' : '' }}">--}}
{{--                                <label class="col-lg-2 control-label" for="demoDate">Due Date</label>--}}
{{--                                <div class="col-lg-10">--}}
{{--                                    <input class="form-control" placeholder="Due Date" name="due" id="demoDate"--}}
{{--                                           type="text">--}}
{{--                                </div>--}}
{{--                            </div>--}}
                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                    <button class="btn btn-primary btn-block" type="submit">Submit</button>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script type="text/javascript">
        let amount = document.getElementById("amount");
        let invalidChars = [
            "-",
            "+",
            "e",
        ];

        amount.addEventListener("keydown", function (e) {
            if (invalidChars.includes(e.key)) {
                e.preventDefault();
            }
        });
        let interest_period = document.getElementById("interest_period");
        let invalidChars1 = [
            "-",
            "+",
            "e",
        ];

        interest_period.addEventListener("keydown", function (e) {
            if (invalidChars1.includes(e.key)) {

                e.preventDefault();
            }
        });

    </script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#loan_type').on('change', function () {
                let loan_type = $(this).val();
                console.log(loan_type);
                let html = '';

                if (loan_type) {
                    $.ajax({
                        url: "{{url('/member/apply/get')}}/" + loan_type,
                        data: "",
                        type: "GET",
                        dataType: "json",
                        success: function (data) {
                            console.log(data);
                            console.log(data.interest_rate+" p.a");
                            let rate=(data.interest_rate)*100+"% p.a";
                            $("#interest").val(rate);

                        },

                    });
                } else {
                    $("#interest").val('');
                }
            });
        });
    </script>
@endsection
