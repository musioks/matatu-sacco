@extends('admin.template')
@section('page_name') <i class="fa fa-fw fa-users"></i>List of all Users in the System @stop
@section('content')
   <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Last Login Time</th>
                    
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($users as $rows)
                    <tr>
                      <td>{{$rows->name}}</td>
                      <td>{{$rows->email}}</td>
                      <td>{{date('F d, Y,H:i:s a', strtotime($rows->last_login))}}</td>
                    </tr>
                  
                   @endforeach
               
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

@stop