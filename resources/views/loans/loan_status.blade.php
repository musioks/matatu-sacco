@extends('members.default')
@section('page_name') <i class="fa fa-spinner"></i>Loan Status @stop
@section('content')

<div class="row">
 <div class="col-md-12">
   <div class="card">
     <div class="card-body">
        <div class="card">
          <h3 class="card-title">Loan Status</h3>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Loan Amount</th>
                <th>Interest</th>
                <th>Guarantor</th>
                <th>Applied on</th>
                <th>Due Date</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              @foreach($loanStatus as $s)
              <tr>
                <td>{{$s->amount}}</td>
                <td>{{$s->interest}}</td>
                <td>{{$s->fname}} {{$s->lname}}</td>
                <td>{{date('F d, Y', strtotime($s->date_applied))}}</td>
                <td>{{date('F d, Y', strtotime($s->date_due))}}</td>
                <td>{{$s->admin_status==0 ? "NOT APPROVED" : "APPROVED"}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
     </div>
   </div>
 </div>
</div>


@stop