@extends('layouts.app')
@section('content')
<h4 class="mb-3 text-center">My Profile </h4>
<p class="card-text h5 text-center"><img src="{{asset('asset/images/users/'.Auth::user()->img)}}"  class="rounded-start" width="70px" height="70px">
<div class="card" style="width:40%; margin-left: auto;margin-right: auto;">
  <div class="row g-0">
    <div class="col-md-7 offset-md-1">
      <div class="card-body">
        <p class="card-text h5"> Name:{{Auth::user()->name}}</p>
        <p class="card-text h5"><small class="text-muted">Role:{{Auth::user()->role}}</small></p>
        <p class="card-text h5 mb-2"><small class="text-muted">Email:{{Auth::user()->email}}</small></p>
        {{-- <a style="float:left;" class="btn btn-primary mb-4 "  href="">Edit <i class="fa fa-cog"></i></a> --}}
        <a style="float:right;" class="btn btn-danger mb-4 d-block" href="{{route('deleteaccount')}}"><i class="fa fa-times"></i> Delete My Account</a>
      </div>
    </div>
  </div>
</div>
@endsection
