@extends('members.default')
@section('page_name') <i class="fa fa-fw fa-dashboard"></i>Member Dashboard @stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table table-hover table-bordered" id="sampleTable">
                        @php
                            $member=\App\Helpers\GeneralHelper::member();
                            $guarantors=\App\Helpers\GeneralHelper::guarantors();
                       // dd($guarantors);
                        @endphp
                        <tr>
                        <tr>
                            <th>Name</th>
                            <td>{{$member->fname}} {{$member->lname}}</td>
                        </tr>
                        <tr>
                            <th>National ID</th>
                            <td>{{$member->nid}}</td>
                        </tr>
                        <tr>
                            <th>Date of Birth</th>
                            <td>{{date('F d, Y', strtotime($member->dob))}}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{$member->phone}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$member->email}}</td>
                        </tr>
                        <tr>
                            <th>Residence</th>
                            <td>{{$member->residence}}</td>
                        </tr>
                        <tr>
                            <th>Next of Kin</th>
                            <td>{{$member->nok}}</td>
                        </tr>
                        <tr>
                            <th>Relationship</th>
                            <td>{{$member->relationship}}</td>
                        </tr>
                        <tr>
                            <th>Date Joined</th>
                            <td>{{date('F d, Y', strtotime($member->created_at))}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>

@stop
