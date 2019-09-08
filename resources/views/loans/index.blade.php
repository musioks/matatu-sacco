@extends('members.default')
@section('page_name') <i class="fa fa-fw fa-dashboard"></i>Loan Balance @stop
@section('content')

<div class="row">
 <div class="col-md-12">
   <div class="card">
     <div class="card-body">
        <div class="card">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Amount</th>
                <th>Interest</th>
                <th>Due Date</th>
              </tr>
            </thead>
            <tbody>
              @foreach($loan as $l)
              <tr>
                <td>{{$l->amount}}</td>
                <td>{{$l->interest}}</td>
                <td>{{$l->due_date}}</td>
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