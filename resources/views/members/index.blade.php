@extends('members.default')
@section('page_name') <i class="fa fa-fw fa-dashboard"></i>Member Dashboard @stop
@section('content')

<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                 
                    <tr>
                      <tr><th>Name</th><td>{{$members->fname}} {{$members->lname}}</td> </tr>
                     <tr> <th>National ID</th><td>{{$members->nid}}</td> </tr>
                     <tr> <th>Date of Birth</th> <td>{{date('F d, Y', strtotime($members->dob))}}</td> </tr>
                     <tr> <th>Phone</th><td>{{$members->phone}}</td> </tr>
                      <tr><th>Email</th><td>{{$members->email}}</td> </tr>
                      <tr><th>Residence</th><td>{{$members->residence}}</td> </tr>
                     <tr> <th>Next of Kin</th><td>{{$members->nok}}</td> </tr>
                     <tr>  <th>Relationship</th><td>{{$members->relationship}}</td> </tr>
                     <tr> <th>Date Joined</th><td>{{date('F d, Y', strtotime($members->created_at))}}</td> </tr>
                </table>
              </div>
            </div>
          </div>
        </div>


@stop