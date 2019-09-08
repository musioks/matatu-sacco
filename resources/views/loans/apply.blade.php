@extends('members.default')
@section('page_name') <i class="fa fa-fw fa-dashboard"></i>Loan application @stop
@section('content')

<div class="row">
 <div class="col-md-12">
   <div class="card">
     <div class="card-body">
        <div class="card">
              <div class="well bs-component">
                <form class="form-horizontal" method="post" action="{{ route('loan_apply') }}">
                  {{csrf_field()}}
                  <fieldset>
                    <legend>Apply Loan Here</legend>
                    <div class="form-group {{ $errors->has('amount') ? ' has-error' : '' }}">
                      <label class="col-lg-2 control-label" for="amount">Amount</label>
                      <div class="col-lg-10">
                        <input class="form-control" id="amount" type="number" name="amount" placeholder="Enter Amount">
                                              @if ($errors->has('amount'))
                            <span class="help-block">
                                <strong>{{ $errors->first('amount') }}</strong>
                            </span>
                        @endif
                      </div>
                    </div>
                    <div class="form-group {{ $errors->has('guarantor') ? ' has-error' : '' }}">
                      <label class="col-lg-2 control-label" for="select">Guarantor</label>
                      <div class="col-lg-10">
                        <select class="form-control" id="select" name="guarantor">
                          <option value="">--select guarantor---</option>
                          @if(!empty($users))
                          @forelse($users as $user)
                          <option value="{{$user->id}}">{{$user->name}}</option>
                          @empty
                          <option value="">No Data</option>
                          @endforelse
                          @endif
                        </select>
                      </div>
                                            @if ($errors->has('guarantor'))
                          <span class="help-block">
                              <strong>{{ $errors->first('guarantor') }}</strong>
                          </span>
                      @endif
                    </div>
                    <div class="form-group {{ $errors->has('due') ? ' has-error' : '' }}">
                      <label class="col-lg-2 control-label" for="demoDate">Due Date</label>
                      <div class="col-lg-10">
                        <input class="form-control" placeholder="Due Date" name="due" id="demoDate" type="text">
                                                    @if ($errors->has('due'))
                                  <span class="help-block">
                                      <strong>{{ $errors->first('due') }}</strong>
                                  </span>
                              @endif
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-10 col-lg-offset-2">
                        <button class="btn btn-primary btn-block" type="submit">Submit</button>
                      </div>
                    </div>
                  </fieldset>
                </form>
              </div>
          </div>    
        </div>
     </div>
   </div>
 </div>
</div>


@stop