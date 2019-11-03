@extends('admin.template')
@section('page_name') <i class="fa fa-fw fa-user"></i> Show Member details @stop
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <a href="{{url('/admin/members')}}" class="btn btn-info">Go Back</a>
                    <hr>
                    <form role="form" method="POST" action="{{url('/admin/members/'.$member->id.'/update')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="vehicle_image"> Vehicle Image:</label>
                                    <img src="{{asset('/members/vehicles/'.$member->vehicle_image)}}"
                                         alt="{{$member->vehicle_image ?? ''}}">
                                    <a href="{{asset('/members/logbooks/'.$member->vehicle_image)}}">{{$member->vehicle_image}}</a>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="vehicle_image"> LogBook:</label>
                                <div class="form-group">
                                    <img src="{{asset('/members/logbooks/'.$member->logbook)}}"
                                         alt="{{$member->logbook ?? ''}}">
                                    <a href="{{asset('/members/logbooks/'.$member->logbook)}}">{{$member->logbook}}</a>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" placeholder="First Name" name="fname"
                                           type="text" value="{{$member->fname ?? ''}}" autofocus>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Last Name" name="lname" type="text"
                                           value="{{$member->lname ?? ''}}" autofocus>

                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" placeholder="National ID" name="nid"
                                           type="number" value="{{$member->nid ?? ''}}" autofocus>
                                </div>
                            </div>
                        </div>
                        <!--end row-->
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Date of Birth" name="dob"
                                           id="demo" type="text" value="{{$member->dob ?? ''}}" autofocus
                                           autocomplete="off">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group ">
                                    <input class="form-control" placeholder="Phone No." name="phone" type="text"
                                           value="{{$member->phone ?? ''}}" autofocus>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="email" type="email"
                                           autofocus value="{{$member->email ?? ''}}">
                                </div>
                            </div>
                        </div>
                        <!--end row-->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" placeholder="Where do you stay?"
                                           name="residence" type="text" value="{{$member->residence ?? ''}}" autofocus>

                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group {{ $errors->has('nok') ? ' has-error' : '' }}">
                                    <input class="form-control" placeholder="Next of Kin" name="nok" type="text"
                                           value="{{$member->nok ?? ''}}" autofocus>
                                </div>
                            </div>
                        </div>
                        <!--end row-->
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="logbook">Upload Log Book</label>
                                    <input class="form-control" id="logbook" name="logbook" type="file"
                                           value="{{$member->logbook}}" autofocus>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="vehicle_image">Upload Vehicle Picture</label>
                                    <input class="form-control" id="vehicle_image" name="vehicle_image" type="file"
                                           value="{{$member->vehicle_image}}" autofocus>

                                </div>
                            </div>
                        </div>
                        <!--end row-->

                        <div class="card-footer">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <button class="btn btn-success icon-btn btn-block" type="submit"><i
                                            class="fa fa-fw fa-lg fa-refresh"></i> Update
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
@stop
@section('scripts')
    <script type="text/javascript">
        var today = new Date();
        $('#demo').datepicker({
            format: "yyyy-mm-dd",
            autoclose: true,
            todayHighlight: true,
            endDate: "today",
            maxDate: today
        });

        $('#demo').keyup(function () {
            if (this.value.match(/[^0-9]/g)) {
                this.value = this.value.replace(/[^0-9^-]/g, '');
            }
        });

        $('#demoSelect').select2();
    </script>
@endsection

