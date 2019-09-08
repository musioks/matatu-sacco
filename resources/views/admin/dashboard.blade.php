@extends('admin.template')
@section('page_name') <i class="fa fa-fw fa-dashboard"></i>Admin Dashboard @stop
@section('content')
   <div class="row">
          <div class="col-md-6">
            <div class="widget-small primary"><i class="icon fa fa-users fa-3x"></i>
              <div class="info">
              <a href="{{route('users')}}" style="color: #FFFFFF;">
                <h4>Users</h4>
                <p><b>{{count($users)}}</b></p>
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="widget-small warning"><i class="icon fa fa-user fa-3x"></i>
              <div class="info">
              <a href="{{route('members')}}" style="color: #FFFFFF;">
                <h4>members</h4>
                <p><b>{{count($members)}}</b></p>
                </a>
              </div>
            </div>
          </div>
        
        </div>

@stop