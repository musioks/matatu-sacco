@extends('admin.template')
@section('page_name') <i class="fa fa-fw fa-user"></i>Loan Applications @stop
@section('content')
@include('_message')
   <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover table-bordered" >
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Due Date</th>
                      <th>Date Applied</th>
                      <th>Amount</th>
                      <th>Guarantor status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(!empty($loans))
                  @foreach($loans as $loan)
                    <tr>
                      <td>{{$loan->fname}} {{$loan->lname}}</td>
                       <td>{{date('F d, Y', strtotime($loan->date_due))}}</td>
                       <td>{{date('F d, Y', strtotime($loan->date_applied))}}</td>
                      <td>{{$loan->amount}}</td>
                      <td>{{$loan->guarantor_status==0 ? 'NOT APPROVED' : 'APPROVED'}}</td>
                      <?php if($loan->admin_status==0){?>
                      <td><a href="#" class="btn btn-sm btn-info" title=""  data-toggle="modal" data-target="#myModal">Approve</a></td>
                      <?php }else{?>
                      <td><button type="submit" class="btn btn-sm btn-success" readonly>APPROVED</button></td>
                      <?php }?>                      
                    </tr>
                   @endforeach
                   @endif
               
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal approve-->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Approve Loan</h4>
      </div>
      <div class="modal-body">
        <form action="{{ url('/postLoan',$loan->member_id) }}" method="post" data-parsley-validate="">
          {{csrf_field()}}
          <div class="form-group">
          <label for="status">Select</label>
          <select class="form-control" name="status" required="">
            <option value="">-------select option--------</option>
            <option>YES</option>
            <option>NO</option>
          </select>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Reasons(option)</label>
          <textarea name="reason" class="form-control" cols="30" rows="5"></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>

@stop