@extends('admin.template')
@section('page_name') <i class="fa fa-fw fa-user"></i>List of all Members in the sacco @stop
@section('content')
   <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>National ID</th>
                      <th>Date of Birth</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Residence</th>
                      <th>Next of Kin</th>
                      <th>Relationship</th>
                      <th>Date Joined</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($members as $rows)
                    <tr>
                      <td>{{$rows->fname}} {{$rows->lname}}</td>
                      <td>{{$rows->nid}}</td>
                      <td>{{$rows->dob}}</td>
                      <td>{{$rows->phone}}</td>
                      <td>{{$rows->email}}</td>
                      <td>{{$rows->residence}}</td>
                      <td>{{$rows->nok}}</td>
                      <td>{{$rows->relationship}}</td>
                      <td>{{date('F d, Y', strtotime($rows->created_at))}}</td>
                      
                    </tr>
                  
                   @endforeach
               
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

@stop