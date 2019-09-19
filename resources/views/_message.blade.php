@if(session()->has('error'))
    <div class="alert alert-danger text-center">
        <strong>{{session()->get('error')}}</strong>
    </div>
@endif
@if(session()->has('success'))
    <div class="alert alert-success text-center">
        <strong>{{session()->get('success')}}</strong>
    </div>
@endif
