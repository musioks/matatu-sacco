@extends('admin.template')
@section('page_name') <i class="fa fa-fw fa-user"></i>Bookings @stop
@section('content')
   <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover table-bordered" >
                  <thead>
                    <tr>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>destination</th>
                      <th>Event Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(!empty($bookings))
                  @foreach($bookings as $booking)
                    <tr>
                      <td>{{$booking->name}}</td>
                      <td>{{$booking->email}}</td>
                      <td>{{$booking->phone}}</td>
                      <td>{{$booking->destination}}</td>
                      <td>{{date('F d, Y', strtotime($booking->event_date))}}</td>
                      <td><a href="{{ url('/delete/booking',$booking->id) }}" class="btn btn-sm btn-info" title="">delete</a></td>
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