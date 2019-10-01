@extends('admin.template')
@section('page_name') <i class="fa fa-fw fa-user"></i>Complains @stop
@section('content')
   <div class="row">
          <div class="col-md-12">
          <a href="{{url('/admin/complains/print')}}" class="btn btn-primary pull-right"><i class="fa fa-fw fa-file-pdf-o"></i>Print</a>
                    <h4 class="clearfix">&nbsp;</h4>
            <div class="card">
              <div class="card-body">
                <table class="table table-hover table-bordered" >
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Image</th>
                      <th>Description</th>
                      <th>Date Commited</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(!empty($complains))
                  @foreach($complains as $complain)
                    <tr>
                      <td>{{$complain->name}}</td>
                      <td>{{$complain->email}}</td>
                      <td>{{$complain->phone}}</td>
                      <td>{{$complain->pic}}</td>
                      <td>{{$complain->description}}</td>
                      <td>{{date('F d, Y', strtotime($complain->created_at))}}</td>
                      <td><a href="{{ url('/delete/complain',$complain->id) }}" class="btn btn-sm btn-info" title="">delete</a></td>
                    </tr>

                   @endforeach
                   @endif
               
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

@stop