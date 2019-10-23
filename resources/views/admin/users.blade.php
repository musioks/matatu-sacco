@extends('admin.template')
@section('page_name') <i class="fa fa-fw fa-users"></i>List of all Users in the System @stop
@section('styles')
    <style>
        #sampleTable th, td{
            font-size: 1.2em;
        }
    </style>
@stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <!-- Modal -->
                    <div class="modal fade" id="add-Admin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                                            aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Add Admin </h4>
                                </div>
                                <div class="modal-body">
                                    <form role="form" method="POST" action="{{url('/admin/register')}}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                                                    <input class="form-control" placeholder="Full Name" name="name"
                                                           type="text"
                                                           value="{{old('name')}}" autofocus>
                                                    @if ($errors->has('name'))
                                                        <span class="help-block">
                        <strong>{{ $errors->first('name') }}</strong>
                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                                    <input class="form-control" placeholder="E-mail" name="email"
                                                           type="email"
                                                           autofocus value="{{old('email')}}">
                                                    @if ($errors->has('email'))
                                                        <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div><!--end row-->
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div
                                                    class="form-group  {{ $errors->has('password') ? ' has-error' : '' }}">
                                                    <input class="form-control" placeholder="Password" name="password"
                                                           type="password">
                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div
                                                    class="form-group  {{ $errors->has('password') ? ' has-error' : '' }}">
                                                    <input class="form-control" placeholder="Password confirmation"
                                                           name="password_confirmation" type="password">
                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div><!--end row-->
                                        <div class="card-footer">
                                            <div class="row">
                                                <div class="col-md-8 col-md-offset-2">
                                                    <button class="btn btn-success icon-btn btn-block" type="submit"><i
                                                            class="fa fa-fw fa-lg fa-check-circle"></i>Submit
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end modal -->
                    <div class="pull-right">
                        <button class="btn btn-primary" data-toggle="modal" data-target="#add-Admin"><i
                                class="fa fa-plus"></i> Add Admin User
                        </button>
                    </div>
                    <h6 class="clearfix">&nbsp;</h6>
                    <table class="table table-hover table-bordered" id="sampleTable">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Type</th>
                            <th>Last Login Time</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $row)
                            <tr>
                                <td>{{$loop->iteration ?? ''}}</td>
                                <td>{{$row->name ?? ''}}</td>
                                <td>{{$row->email ?? ''}}</td>
                                <td>
                                    <span class="label label-success">{{$row->role ?? ''}}</span>

                                </td>
                                <td>
                                    @if(is_null($row->last_login))
                                        {{"---"}}
                                        @else
                                    {{date('F d, Y,H:i:s a', strtotime($row->last_login))}}
                                        @endif
                                </td>
                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop
