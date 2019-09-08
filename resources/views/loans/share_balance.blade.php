@extends('members.default')
@section('page_name') <i class="fa fa-ils"></i>Share Balance @stop
@section('content')

<div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-body">
             <div class="card">
               <table class="table table-hover">
                 <tbody>
                  @forelse($shares as $share)
                   <tr>
                     <th>Anount</th><td>{{$share->amount}}</td>
                     <th>Created On</th> <td>{{$share->created_at}}</td>
                   </tr>
                   @empty
                   <p>NO SHARES</p>
                   @endforelse
                 </tbody>
               </table>
             </div>
          </div>
        </div>
      </div>
</div>


@stop