@extends('admin.template')
@section('page_name') <i class="fa fa-fw fa-user"></i>List of all Members in the sacco @stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-condensed table-bordered" id="sampleTable">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>National ID</th>
                            <th>Date of Birth</th>
                            <th>Phone</th>
                            <th>Email</th>
                            {{--                      <th>Residence</th>--}}
                            {{--                      <th>Next of Kin</th>--}}
                            {{--                      <th>Relationship</th>--}}
                            <th>Status</th>
                            <th>Date Joined</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($members as $row)
                            <tr>
                                <td>{{$row->full_name ?? ''}}</td>
                                <td>{{$row->nid ?? ''}}</td>
                                <td>{{$row->dob ?? ''}}</td>
                                <td>{{$row->phone ?? ''}}</td>
                                <td>{{$row->email ?? ''}}</td>
                                {{--                      <td>{{$row->residence ?? ''}}</td>--}}
                                {{--                      <td>{{$row->nok ?? ''}}</td>--}}
                                {{--                      <td>{{$row->relationship ?? ''}}</td>--}}
                                <td>
                          <span class="label label-primary">
                              {{$row->member_status->name ?? ''}}
                          </span>
                                </td>
                                <td>{{date('F d, Y', strtotime($row->created_at))}}</td>
                                <td>
                                    <a href="{{url('/admin/members/'.$row->id.'/show')}}"> <span class="label label-info"> <i
                                                class="fa fa-eye"></i> View</span></a>
                                    @if($row->member_status_id===\App\Helpers\MemberStatus::pending()->id) |
                                    <span style="cursor: pointer;" class="label label-success" data-toggle="modal"
                                          data-target="#approve-{{$row->id}}"><i class="fa fa-check"></i> Approve</span>
                                    <span style="cursor: pointer;" class="label label-danger" data-toggle="modal"
                                          data-target="#decline-{{$row->id}}"> <i
                                            class="fa fa-times"></i> Decline</span>
                                    @endif

                                </td>
                                <!-- Modal -->
                                <div class="modal fade" id="approve-{{$row->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel">Approve Member Account</h4>
                                            </div>
                                            <div class="modal-body">
                                                <h5>Are you sure you want to approve this account?</h5>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="{{ url('/admin/members/'.$row->id.'/approve') }}"
                                                   class="btn btn-success btn-xs"><i class="fa fa-thumbs-up"></i> Okay</a>
                                                <button type="button" class="btn btn-danger btn-xs" data-dismiss="modal">
                                                    <i class="fa fa-times"></i> Cancel
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end approve modal -->
                                <!-- Modal -->
                                <div class="modal fade" id="decline-{{$row->id}}" tabindex="-1" role="dialog"
                                     aria-labelledby="myModalLabel">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close"><span aria-hidden="true">&times;</span>
                                                </button>
                                                <h4 class="modal-title" id="myModalLabel">Decline Member Account</h4>
                                            </div>
                                            <div class="modal-body">
                                                <h5>Are you sure you want to decline this account?</h5>
                                            </div>
                                            <div class="modal-footer">
                                                <a href="{{ url('/admin/members/'.$row->id.'/decline') }}"
                                                   class="btn btn-success btn-xs"><i class="fa fa-thumbs-up"></i> Okay</a>
                                                <button type="button" class="btn btn-danger btn-xs" data-dismiss="modal">
                                                    <i class="fa fa-times"></i> Cancel
                                                </button>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end approve modal -->

                            </tr>

                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop
