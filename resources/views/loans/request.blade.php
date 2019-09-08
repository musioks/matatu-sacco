@extends('members.default')
@section('page_name') <i class="fa fa-fw fa-dashboard"></i>Guarantor Confirmation @stop
@section('content')

<div class="row">
 <div class="col-md-12">
   <div class="card">
     <div class="card-body">
        <div class="card">
          <h3 class="card-title">Guarantor Confirmation</h3>
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Name</th>
                <th>Phone Number</th>
                <th>Amount</th>
                <th>Interest</th>
                <th>Due Date</th>
                <th>Check to confirm</th>
              </tr>
            </thead>
            <tbody>
              @forelse($request as $r)
              <tr>
                <td>{{$r->fname}} {{$r->lname}}</td>
                <td>{{$r->amount}}</td>
                <td>{{$r->phone}}</td>
                <td>{{$r->interest}}</td>
                <td>{{$r->date_due}}</td>
                <td><?php if($r->guarantor_status==0){ ?><i class="fa fa-times" aria-hidden="true"></i><?php }else{ ?><a href="{{url('/guarantor/confirmation',$r->id)}}" title=""><i class="fa fa-check-square" aria-hidden="true"></i></a><?php } ?></td>
              </tr>
              @empty
              <tr>
                <p class="text-danger">NO GUARANTEE REQUEST</p>
              </tr>
             
              @endforelse
            </tbody>
          </table>
        </div>
     </div>
   </div>
 </div>
</div>


@stop