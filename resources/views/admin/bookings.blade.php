@extends('admin.template')
@section('page_name') <i class="fa fa-fw fa-list"></i>Bus Hires @stop
@section('content')
   <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table class="table table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Bus</th>
                      <th>Name</th>
                      <th>From Date</th>
                      <th>To Date</th>
                      <th>Purpose</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($bookings as $booking)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$booking->bus->number_plate ?? ''}}</td>
                      <td>{{$booking->customer->name ?? ''}}</td>
                      <td>{{$booking->from_date ?? ''}}</td>
                      <td>{{$booking->to_date ?? ''}}</td>
                      <td>{{$booking->purpose ?? ''}}</td>
                      <td>
{{--                          <a href="{{ url('/admin/bookings/',$booking->id.'/delete') }}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> </a>--}}
                          <a href="{{ url('/admin/bookings/'.$booking->id.'/delete') }}" onclick="return confirm('Do you want to delete this booking?');" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> </a>
                          <a href="{{url('admin/bookings/'.$booking->id.'/view')}}" class="btn btn-sm btn-success">View</a>
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
