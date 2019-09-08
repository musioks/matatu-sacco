@extends('members.default')
@section('page_name') <i class="fa fa-address-card-o" ></i>Insurance Balance @stop
@section('content')

<div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
           <div class="card">
             <table class="table table-hover">
               <tbody>
                @forelse($inus as $inu)
                   <tr>
                     <th>Anount</th><td>{{$inu->amount}}</td>
                     <th>Created On</th> <td>{{$inu->created_at}}</td>
                   </tr>
                   @empty
                   <p>NO INSURANCE</p>
                   @endforelse
                 </tbody>
               </tbody>
             </table>
           </div>
        </div>
      </div>
    </div>
</div>


@stop