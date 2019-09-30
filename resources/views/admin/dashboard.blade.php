@extends('admin.template')
@section('page_name') <i class="fa fa-fw fa-dashboard"></i>Admin Dashboard @stop
@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="widget-small info"><i class="icon fa fa-pencil-square-o fa-3x"></i>
                <div class="info">
                    <a href="{{url('admin/loan-applications')}}" style="color: #FFFFFF;">
                        <h4>Total Applied Loans</h4>
                        <p><b>{{count(\App\Helpers\LeaveHelper::all_applications())}}</b></p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="widget-small primary"><i class="icon fa fa-check fa-3x"></i>
                <div class="info">
                    <a href="{{url('admin/loan-applications')}}" style="color: #FFFFFF;">
                        <h4>Total Approved Loans</h4>
                        <p><b>{{count(\App\Helpers\LeaveHelper::approved_applications())}}</b></p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="widget-small warning"><i class="icon fa fa-table fa-3x"></i>
                <div class="info">
                    <a href="{{url('admin/loan-applications')}}" style="color: #FFFFFF;">
                        <h4>Total Pending Loans</h4>
                        <p><b>{{count(\App\Helpers\LeaveHelper::pending_applications())}}</b></p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="widget-small danger"><i class="icon fa fa-times-circle-o fa-3x"></i>
                <div class="info">
                    <a href="{{url('admin/loan-applications')}}" style="color: #FFFFFF;">
                        <h4>Total Rejected Loans</h4>
                        <p><b>{{count(\App\Helpers\LeaveHelper::rejected_applications())}}</b></p>
                    </a>
                </div>
            </div>
        </div>

    </div>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <div class="widget-small primary"><i class="icon fa fa-users fa-3x"></i>
                <div class="info">
                    <a href="{{url('admin/users')}}" style="color: #FFFFFF;">
                        <h4>Users</h4>
                        <p><b>{{count($users)}}</b></p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="widget-small warning"><i class="icon fa fa-user fa-3x"></i>
                <div class="info">
                    <a href="{{url('admin/members')}}" style="color: #FFFFFF;">
                        <h4>members</h4>
                        <p><b>{{count($members)}}</b></p>
                    </a>
                </div>
            </div>
        </div>

    </div>
@stop
