@extends('admin.template')
@section('page_name') <i class="fa fa-fw fa-user"></i>Member shares @stop
@section('content')
@include('_message')
<button type="button" class="btn btn-lg btn-info" data-toggle="modal" data-target="#myModal">ADD SHARE</button>
   <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover table-bordered" >
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Amount</th>
                      <th>Date Updated</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(!empty($shares))
                  @foreach($shares as $share)
                    <tr>
                      <td>{{$share->fname}} {{$share->lname}}</td>
                      <td>{{$share->amount}}</td>
                          <td>{{date('F d, Y', strtotime($share->updated_at))}}</td>
                      <td><a href="{{ url('/delete/share',$share->id) }}" class="btn btn-sm btn-info" title="">delete</a></td>                    
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
                <h4 class="modal-title" id="myModalLabel">Add Share</h4>
              </div>
              <div class="modal-body">
                
                <form action="{{ url('/postshare') }}" method="post" data-parsley-validate="">
                  {{csrf_field()}}
                  <div class="form-group">
                    <label for="status">Select member</label>
                    <select class="form-control" name="member_id" required="">
                      <option value="">-------select option--------</option>
                      @foreach($users as $user)
                      <option value="{{$user->id}}">{{$user->name}}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="amount">Amount</label>
                    <input type="number" name="amount" id="amount" class="form-control" required="" placeholder="Enter Amount">
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