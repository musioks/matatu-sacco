 @if(Session::has('error'))
<div class="alert alert-danger text-center">
<strong>{{Session::get('error')}}</strong>
</div>
@endif
@if(Session::has('success'))
<div class="alert alert-success text-center">
<strong>{{Session::get('success')}}</strong>
</div>
@endif